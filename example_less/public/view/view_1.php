<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>
<body>
    <h1>Users</h1>
    <table style="border: 1px solid black; width:50%">
  <tr>
    <th style="width:70%">Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Действия</th>
  </tr>
    <?php foreach($users as $user)  : ?>
      <tr style="border: 1px solid black;">
        <td style="border: 1px solid black;"><?=$user['id']?></td>
        <td style="border: 1px solid black;"><?=$user['name']?></td>
        <td style="border: 1px solid black;"><?=$user['email']?></td>
        <td style="border: 1px solid black;">
        <form action="/homework_hilel/example_less/user/delete" class="p-4 shadow rounded" method="POST">
            <div class="mb-3">
                <input type="hidden" class="form-control" name="id" value="<?=$user['id']?>">
            </div>
            
            <button type="submit" class="btn btn-primary w-100 p-2 text-uppercase fs-5">
                Delete
            </button>
            
        </form>
        <form action="/homework_hilel/example_less/user/view" class="p-4 shadow rounded" method="POST">
            <div class="mb-3">
                <input type="hidden" class="form-control" name="id" value="<?=$user['id']?>">
            </div>
            
            <button type="submit" class="btn btn-primary w-100 p-2 text-uppercase fs-5">
                Update
            </button>
        </form>
        </td>
      </tr>
    <?php endforeach; ?>
</table>

</body>
</html>

