<?php if (!isset($_SESSION['admin'])): ?>
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Вход в панель Администратора!</div>
        <div class="card-body">
            <form action="/admin/login" method="post">
                <div class="form-group">
                    <label>Логин</label>
                    <input class="form-control" type="text" name="login">
                </div>
                <div class="form-group">
                    <label>Пароль</label>
                    <input class="form-control" type="password" name="password">
                    <b><button type="submit" name="enter">Вход</button></b>
                </div>
            </form>
        </div>
    </div>
</div>

<?php else:  ?>
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
<!--                            <a href="/admin/banners"> СПИСОК БАННЕРОВ</a>-->
                            <a href="/admin/banners" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">СПИСОК БАННЕРОВ</a>

<!--                            <button href="/admin/banners" type="button" class="btn btn-primary btn-block">СПИСОК БАННЕРОВ</button>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>