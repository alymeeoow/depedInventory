<?php
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($request) {
    case '/login':
        require __DIR__ . '/templates/html/components/main/login.php';
        break;

    case '/dashboard':
        require __DIR__ . '/templates/html/components/main/dashboard.php';
        break;

        case '/forgot-password':
            require __DIR__ . '/templates/html/components/forgot-password/forgot.php';
            break;

            case '/code':
                require __DIR__ . '/templates/html/components/forgot-password/code.php';
                break;

                case '/reset':
                    require __DIR__ . '/templates/html/components/forgot-password/reset.php';
                    break;

    case '/401':
        http_response_code(401);
        require __DIR__ . '/templates/html/errors/401.php';
        break;

    case '/403':
        http_response_code(403);
        require __DIR__ . '/templates/html/errors/403.php';
        break;

    case '/404':
        http_response_code(404);
        require __DIR__ . '/templates/html/errors/404.php';
        break;

    case '/':


    case '/index.php':
        header("Location: /login");
        exit;

    default:
        http_response_code(404);
        require __DIR__ . '/templates/html/errors/404.php';
        break;
}
?>
