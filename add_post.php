<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить пост</title>
    <link rel="stylesheet" href="style.css"> <!-- Подключение файла стилей -->
</head>
</head>
<body>
    <h1>Добавить пост о путешествии</h1>
    <!-- Сообщение об ошибках -->
    <a href="view_posts.php" class="add-post-btn">Вернуться к таблице</a>
    <div class="message">
        <?php if (isset($_GET['message'])): ?>
            <span style="color: red;">
                <?php
                if ($_GET['message'] === 'title_error') {
                    echo "Заголовок не должен превышать 50 символов.";
                } elseif ($_GET['message'] === 'location_error') {
                    echo "Местоположение не должно превышать 50 символов.";
                } elseif ($_GET['message'] === 'image_error') {
                    echo "Прикрепляемый файл должен быть изображением (JPEG, PNG, GIF, JPG).";
                } elseif ($_GET['message'] === 'error') {
                    echo "Произошла ошибка при создании поста.";
                } elseif ($_GET['message'] === 'file_error') {
                    echo "Произошла ошибка при работе с файлом.";
                } elseif ($_GET['message'] === 'login_error') {
                    echo "Для создания постов необходимо авторизоваться";
                }
                ?>
            </span>
        <?php endif; ?>
    </div>
    <form action="submit_post.php" method="post" enctype="multipart/form-data">
        <label for="title">Заголовок:</label>
        <input type="text" id="title" name="title" required>
    
        <label for="content">Текст поста:</label>
        <textarea id="content" name="content" required></textarea>
    
        <label for="location">Местоположение:</label>
        <input type="text" id="location" name="location">
    
        <label for="images">Прикрепить файлы:</label>
        <input type="file" id="images" name="images[]" multiple>
    
        <input type="submit" value="Добавить пост">
    </form>
</body>
</html>