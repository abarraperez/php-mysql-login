<h1>Listado de usuarios: </h1>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Estado</th>
            <th>Created at</th>
            <th>Modificado en</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user  ): ?>
            <tr>
               <?php $user = (object) $user; ?>
                <td><?= $user->id ?></td>
                <td><?= $user->username ?></td>
                <td><?= $user->email ?></td>
                <td><?= $user->status ?></td>
                <td><?= $user->created_at ?></td>
                <td><?= $user->updated_at ?></td>
            </tr>
        <?php	endforeach; ?>
    </tbody>
</table>