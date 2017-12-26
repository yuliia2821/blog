<nav class="navbar navbar-default my-nav">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Блог</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ Request::path() == '/' ? 'active' : '' }}"><a href="/">Главная <span class="sr-only">(current)</span></a></li>
                <li class="{{ Request::path() == 'about' ? 'active' : '' }}"><a href="/about">О себе</a></li>
                <li class="{{ Request::path() == 'contact' ? 'active' : '' }}"><a href="/contact">Контакты</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Аккаунт <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://localhost:8000/posts">Все посты</a></li>
                        <li><a href="http://localhost:8000/posts/create">Создать пост</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Выйти</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
