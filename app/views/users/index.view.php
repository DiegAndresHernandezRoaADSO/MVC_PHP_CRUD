<p>
    Listando usuarios
</p>

<div>
    <div class="table">
        <div>Email</div>
        <div>Users</div>
        <div>Accion</div>
        <?php
        foreach ($data["users"] as $key) {
            ?>
            <div>
                <?= $key["email"]; ?>
            </div>
            <div>
                <?= $key["username"]; ?>
            </div>
            <div>
                <a href="<?= URL ?>/users/edit"<?=$key["id"]?>>Editar</a>
            </div>
            <?php
        }
        ?>
    </div>
</div>