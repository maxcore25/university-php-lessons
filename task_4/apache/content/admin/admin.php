<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Coffee House | Вакансии</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Coffe House</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupporteddContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="">Главная</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="menu.php">Меню</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="vacancy.php">Вакансии</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">О нас</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/admin/admin.php">Админка</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <h3>Меню</h3>
  <div class="container">
    <div class="row">
      <?php
      $mysqli = new mysqli("db", "mysql", "123456", "app_db");
      $result = $mysqli->query("SELECT * FROM product");
      foreach ($result as $row) {
        echo "
        <div class='col'>
          <div class='card' style='width: 18rem;'>
            <div class='card-body'>
              <h5 class='card-title'>{$row["name"]}</h5>
              <h6 class='card-subtitle mb-2 text-muted'>{$row['price']}</h6>
              <p class='card-text'>Lorem ipsum dolor sit amet.</p>
              <div class='container'>
                <div class='row'>
                  <div class='col'>
                  <a href='/admin/edit.php?type=product&id={$row['id']}' class='btn btn-warning'>Изменить</a>
                  <a href='/admin/crud/delete.php?type=product&id={$row['id']}' class='btn btn-danger'>Удалить</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        ";
      }
      ?>
    </div>
    <br />
    <div class="row">
      <div class="col">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <div class="container">
              <div class="row">
                <a href="/admin/add.php?type=product" class="btn btn-primary">Добавить</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br />
  <h3>Вакансии</h3>
  <div class="container">
    <div class="row">
      <?php
      $mysqli = new mysqli("db", "mysql", "123456", "app_db");
      $result = $mysqli->query("SELECT * FROM vacancy");
      foreach ($result as $row) {
        echo "
        <div class='col'>
          <div class='card' style='width: 18rem;'>
            <div class='card-body'>
              <h5 class='card-title'>{$row["name"]}</h5>
              <h6 class='card-subtitle mb-2 text-muted'>{$row['salary']}</h6>
              <p class='card-text'>Lorem ipsum dolor sit amet.</p>
              <div class='container'>
                <div class='row'>
                  <div class='col'>
                    <a href='/admin/edit.php?type=vacancy&id={$row['id']}' class='btn btn-warning'>Изменить</a>
                    <a href='/admin/crud/delete.php?type=vacancy&id={$row['id']}' class='btn btn-danger'>Удалить</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        ";
      }
      ?>
    </div>
    <br />
    <div class="row">
      <div class="col">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <div class="container">
              <div class="row">
                <a href="/admin/add.php?type=vacancy" class="btn btn-primary">Добавить</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>