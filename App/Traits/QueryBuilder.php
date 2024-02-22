<?php


namespace App\Traits;

use PDO;

trait QueryBuilder
{
    public $tableName = '';
    public $where = '';
    public $operator = '';
    public $selectField = '*';
    public $limit = '';
    public $orderBy = '';
    public $innerJoin = '';
    public $insert = '';
    public $leftJoin = '';
    public $groupBy = '';
    public $_connection;

    public function table($tableName)
    {
        $this->tableName = $tableName;

        return $this;
    }

    public function query($sql)
    {
        // var_dump($sql);
        // echo $sql;
        $stmt = $this->_connection->pdo()->prepare($sql);
        $stmt->execute();
        return $stmt;
    }

    public function where($field, $compare, $value)
    {
        $this->operator = " WHERE";
        if (!empty($this->where)) {
            $this->operator = " AND ";
            $this->where .= "$this->operator $field $compare $value";
        } else {
            // Kiểm tra nếu giá trị $value là một biểu thức SQL, không cần thêm dấu nháy đơn
            if (strpos($value, ' ') !== false) {
                $this->where .= "$this->operator $field $compare $value";
            } else {
                $this->where .= "$this->operator $field $compare '$value'";
            }
        }
        return $this;
    }

    public function orWhere($field, $compare, $value)
    {
        $this->operator = " WHERE ";
        if (!empty($this->where)) {
            $this->operator = " OR ";
        }
        $this->where .= "$this->operator $field $compare '$value'";
        return $this;
    }

    public function whereLike($field, $value)
    {
        $this->operator = " WHERE ";
        if (!empty($this->where)) {
            $this->operator = " AND ";
        }
        $this->where .= "$this->operator $field LIKE '%$value%'";

        return $this;
    }

    public function limit($number, $offset = 0)
    {
        $this->limit = " LIMIT $offset, $number";
        return $this;
    }

    /**
     * ORDER BY id DESC
     * $this->db->orderBy('id','DESC')
     * $this->db->orderBy('id desc, name asc')
     */
    public function orderBy($field, $type = 'ASC')
    {
        $fileArr = array_filter(explode(',', $field));
        if (!empty($fileArr) && count($fileArr) >= 2) {
            $this->orderBy = " ORDER BY " . implode(', ', $fileArr);
        } else {
            $this->orderBy = " ORDER BY " . $field . " " . $type;
        }
        return $this;
    }

    public function groupBy($field)
    {
        $this->groupBy = " GROUP BY $field";
        return $this;
    }

    public function select($field = "*")
    {
        $this->selectField = $field;
        return $this;
    }

    // Inner join
    public function join($tableName, $relationship)
    {
        $this->innerJoin .= " INNER JOIN $tableName ON $relationship ";
        return $this;
    }

    public function leftJoin($tableName, $relationship)
    {
        $this->leftJoin .= " LEFT JOIN $tableName ON $relationship ";
        return $this;
    }

    // QueryBuilder trait
    public function insert($data)
    {
        $tableName = $this->tableName;
        $insertStatus = $this->insertData($tableName, $data);
        return $insertStatus;
    }

    public function insertData($tableName, $data)
    {
        $fielStr = '';
        $valueStr = '';
        foreach ($data as $key => $value) {
            $fielStr .= $key . ',';
            $valueStr .= "'" . $value . "',";
        }

        $fielStr = rtrim($fielStr, ',');
        $valueStr = rtrim($valueStr, ',');
        $sql = "INSERT INTO $tableName ($fielStr) VALUES ($valueStr)";
        $status = $this->query($sql);

        if (!$status) {
            $errorInfo = $this->_connection->pdo()->errorInfo();
            echo "Error executing query: $sql";
            return false;
        } else {
            $last_id = $this->_connection->pdo()->query("SELECT MAX(id) FROM $tableName")->fetchColumn();
            return $last_id;
        }
    }

    public function lastId()
    {
        $lastId = $this->_connection->pdo()->lastInsertId();
        return $lastId;
    }

    public function delete()
    {
        $whereDelete = str_replace('WHERE', '', $this->where);
        $whereDelete = trim($whereDelete);
        $tableName = $this->tableName;
        $deleteStatus = $this->deleteData($tableName, $whereDelete);
        return $whereDelete;
    }

    public function updateData($table, $data, $condition = '')
    {
        if (!empty($data)) {
            $updateStr = '';
            foreach ($data as $key => $value) {
                if (strpos($value, ' ') !== false) {
                    $updateStr .= "$key=$value,";
                } else if ($value === '' || $value === null) {
                    $updateStr .= "$key=NULL,";
                } else {
                    $updateStr .= "$key='$value',";
                }
            }
            $updateStr = rtrim($updateStr, ',');

            $condition = !empty($condition) ? " WHERE $condition" : '';

            $sql = "UPDATE $table SET $updateStr$condition";
            $status = $this->query($sql);
            if (!$status) return false;
        }
        return true;
    }


    public function deleteData($table, $condition = ''): bool
    {
        $sql = 'DELETE FROM ' . $table;
        if (!empty($condition)) {
            $sql = 'DELETE FROM ' . $table . ' WHERE ' . $condition;
        }
        $status = $this->query($sql);
        if (!$status) return false;
        return true;
    }


    public function count()
    {
        $sqlQuery = "SELECT COUNT(*) as count FROM $this->tableName $this->innerJoin $this->leftJoin $this->where $this->groupBy";
        $query = $this->query($sqlQuery);
        $this->resetQuery();
        if (!empty($query)) {
            $result = $query->fetch(PDO::FETCH_ASSOC);
            return isset($result['count']) ? (int)$result['count'] : 0;
        }
        return 0;
    }


    public function first()
    {
        $sqlQuery = "SELECT $this->selectField FROM $this->tableName $this->innerJoin $this->leftJoin $this->where $this->groupBy $this->orderBy $this->limit";
        $query = $this->query($sqlQuery);
        $this->resetQuery();
        if (!empty($query)) return $query->fetch(PDO::FETCH_ASSOC);
        return false;
    }

    public function get()
    {
        // echo $this->innerJoin;
        $sqlQuery = "SELECT $this->selectField FROM $this->tableName $this->innerJoin $this->leftJoin $this->where $this->groupBy  $this->orderBy  $this->limit";
        $query = $this->query($sqlQuery);
        $this->resetQuery();
        if (!empty($query)) return $query->fetchAll(PDO::FETCH_ASSOC);
        return false;
    }

    public function resetQuery()
    {
        // reset field
        $this->tableName = '';
        $this->where  = '';
        $this->operator = '';
        $this->selectField = '*';
        $this->limit = '';
        $this->orderBy = '';
        $this->groupBy = '';
        $this->innerJoin = '';
        $this->insert = '';
        $this->leftJoin = '';
    }
}
