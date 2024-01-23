<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .user-profile {
        max-width: 100%;
        margin: auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        margin-top: 50px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease-in-out;
    }

    .user-profile:hover {
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
    }

    .profile-picture {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 50%;
        margin: auto;
        display: block;
        border: 5px solid #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .profile-title {
        margin-top: 20px;
        text-align: center;
        color: #333;
    }

    .user-info,
    .update-form {
        margin-top: 20px;
        background-color: #f2f2f2;
        padding: 15px;
        border-radius: 8px;
    }

    .profile-links {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        background-color: #5E626F;
        padding: 10px;
        border-radius: 5px;
        margin-top: 20px;
    }

    .profile-links a {
        text-decoration: none;
        padding: 10px;
        border-radius: 5px;
        transition: background-color 0.3s ease-in-out;
        color: #fff;
        text-align: center;
        display: block;
    }

    .profile-links a:hover {
        background-color: #24262B;
    }

    /* Input style */
    input.form-control {
        background-color: #fff;
    }
</style>
<div class="container">
    <div class="container py-5">
        <div class="user-profile bg-light">
            <div class="row">
                <div class="col-md-12">
                    <img src="./public/images/img-1.jpg" alt="Profile Picture" class="profile-picture">
                    <h2 class="profile-title">Toandt</h2>
                    <div class="profile-links">
                        <div class="col">
                            <a href="<?= APP_URL?>account" class="text-white">Account</a>
                        </div>
                        <div class="col">
                            <a href="#" class="text-white">Update Password</a>
                        </div>
                        <div class="col">
                            <a href="<?= APP_URL?>order" class="text-white">Order History</a>
                        </div>
                        <div class="col">
                            <a href="#" class="text-white">Order Canceled</a>
                        </div>
                        <div class="col">
                            <a href="#" class="text-white">Logout</a>
                        </div>
                    </div>
                </div>
                <div class="container mt-5">
                    <table class="table table-striped table-layout-fixed">
                        <colgroup>
                            <!-- Các cột có kích thước như nhau -->
                            <col class="col">
                            <col class="col">
                            <col class="col">
                            <col class="col">
                            <col class="col">
                            <col class="col">
                            <col class="col">
                            <col class="col">
                            <col class="col">
                            <col class="col">
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">STT</th>
                                <th scope="col" class="text-left">Code orders</th>
                                <th scope="col" class="text-left">Customer name</th>
                                <th scope="col" class="text-left">Address</th>
                                <th scope="col" class="text-left">Phone</th>
                                <th scope="col" class="text-left">Payments</th>
                                <th scope="col" class="text-left">Total</th>
                                <th scope="col" class="text-left">Booking date</th>
                                <th scope="col" class="text-left">Status</th>
                                <th scope="col" class="text-left">Manager</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="text-center">1</th>
                                <td class="text-left">DH12345</td>
                                <td class="text-left">Toandt</td>
                                <td class="text-left">Cần Thơ</td>
                                <td class="text-left">0123456789</td>
                                <td class="text-left">Thanh Toán MoMo</td>
                                <td class="text-left">825$</td>
                                <td class="text-left">22/01/2024</td>
                                <td class="text-left">Đã Thanh Toán</td>
                                <td class="text-left">
                                    <a href="#" class="">View</a>
                                    <a href="#" class="">Edit</a>
                                    <a href="#" class="">Cancel</a>
                                </td>
                            </tr>
                            <!-- Thêm các dòng dữ liệu khác tương tự ở đây -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>