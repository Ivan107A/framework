<p>Главная страница</p>

<?php foreach ($news as $val): ?>
    <h3><?php echo $val['title']; ?></h3>
    <p><? echo $val['description']; ?></p>
    <hr>
<?php endforeach;?>


