<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <?php if (!empty(session()->getFlashdata('message'))) { ?>
        <div class="alert alert-success">
            <?php echo session()->getFlashdata('message'); ?>
        </div>
        <?php } ?>
        <h1>Isikan data anda disini!</h1>
        <form action="<?= base_url('home/insert'); ?>" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">NIM</label>
                <input required type="text" name="nim" class="form-control" id="exampleFormControlInput1"
                    placeholder="123456789">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input required type="text" name="nama" class="form-control" id="exampleFormControlInput1"
                    placeholder="agung mahendra">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                </tr>
            </thead>
            <tbody>
                <?php $id = 1; ?>
                <?php foreach ($mahasiswa as $m) : ?>
                <tr>
                    <th scope="row"><?= $id++ ?></th>
                    <td><?=$m['nim']?></td>
                    <td><?=$m['nama']?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>