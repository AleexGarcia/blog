<?php

function headerComponent($currentUser)
{   
    $acesso = $currentUser ? $currentUser['user_type'] : '';
    $name = $currentUser ? $currentUser['username'] : '';
    $name = strtoupper($name);
    switch ($acesso) {
        case 'admin':
            echo "
                <header class='header'>
                    <div>
                        <h1>BLOG</h1>
                        <p>Bem vindo, {$name}</p>
                    </div>
                    <nav class='nav'>
                        <ul>
                            <li>
                                <a class='nav-link' href='index.php'>Pagina principal</a>
                            </li>
                            <li>
                                <a class='nav-link' href='gerenciar-posts.php'>Gerenciar posts</a>
                            </li>
                            <li>
                                <a class='nav-link' href='gerenciar-usuarios.php'>Gerenciar usuários</a>
                            </li>
                            <li>
                                <a class='nav-link' href='editar-perfil.php'>Editar perfil</a>
                            </li>
                        </ul>
                    </nav>
                    <a class='button' href='./actions/auth/logout.php'>logout</a>
                </header>
            ";
        break;
        case 'editor':
            echo "
                <header class='header'>
                    <div>
                        <h1>BLOG</h1>
                        <p>Bem vindo, {$name}</p>
                    </div>
                    <nav   class='nav'>
                        <ul>
                            <li>
                                <a class='nav-link' href='index.php'>Pagina Principal</a>
                            </li>
                            <li>
                                <a class='nav-link' href='gerenciar-posts.php'>Gerenciar Posts</a>
                            </li>
                            <li>
                                <a class='nav-link' href='editar-perfil.php'>Editar perfil</a>
                            </li>
                        </ul>
                    </nav>
                    <a class='button' href='./actions/auth/logout.php'>logout</a>
                </header>
            ";
            break;
        default:
        echo "
        <header class='header'>
            <h1>BLOG</h1>
            <nav  class='nav'>
                <ul>
                    <li>
                        <a class='nav-link' href='index.php'>Pagina principal</a>
                    </li>
                </ul>
            </nav>
            <a class='button' href='login.php'>Login</a>
        </header>
    ";
    }
}
?>
