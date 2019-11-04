<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Language" content="en">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
  <meta name="description" content="This is an example dashboard created using build-in elements and components.">
  <meta name="msapplication-tap-highlight" content="no">
  <?php $this->load->view('templates/link_rel.php') ?>
</head>

<body>

<table style="position: absolute;top: 0px;right: 0px;bottom: 0px;left: 0px;width: 100%;height: 100%">
  <tr>
    <td style="padding: 10%">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-4 offset-sm-4">
            <div class="card card-login mx-auto text-center bg-dark">
              <div class="card-header mx-auto bg-dark">
                <span class="logo_title mt-5 text-white">Login Dashboard</span>
              </div>
              <div class="card-body">
                <form action="" method="post">
                  <div class="input-group form-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" name="email" class="form-control" placeholder="Username">
                  </div>
                  <div class="input-group form-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <input type="submit" name="btn" value="Login" class="btn btn-outline-danger float-right login_btn">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </td>
  </tr>
</table>

  <?php $this->load->view('templates/script_src.php') ?>
</body>

</html>