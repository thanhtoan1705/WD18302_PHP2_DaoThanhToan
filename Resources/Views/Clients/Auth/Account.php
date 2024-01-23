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
                <div class="col-md-6 user-info">
                    <p><strong>Username:</strong>
                        toandt
                    </p>
                    <p><strong>Phone:</strong>
                        0123456789
                    </p>
                    <p><strong>Email:</strong>
                        toan11156@gmail.com
                    </p>
                    <p><strong>Address:</strong>
                        Cần Thơ
                    </p>
                </div>
                <div class="col-md-6">
                    <form class="update-form" method="post">
                        <input type="hidden" class="form-control" name="id_user" value="<?= $user_id ?>">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username:</label>
                            <input type="text" class="form-control" id="name_user" name="name_user" value="toandt">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone:</label>
                            <input type="tel" class="form-control" id="number_phone_user" name="number_phone_user" value="0123456789">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="text" class="form-control" id="email_user" name="email_user" value="toan11156@gmail.com">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address:</label>
                            <input type="text" class="form-control" id="address_user" name="address_user" value="Cần Thơ">
                        </div>
                        <button type="submit" class="btn btn-primary" name="btn_edit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>