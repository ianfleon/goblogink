<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/bulma/css/bulma.min.css" />
    <title>Form Post</title>
    <script src="/assets/jquery/jquery370.js"></script>
    <link rel="stylesheet" href="/assets/summernote/summernote-lite.css"/>
    <script src="/assets/summernote/summernote-lite.min.js"></script>
</head>

<body>

    <?= $this->view('components/navbar') ?>
    <div class="container">
        <div class="columns">
            <div class="column is-half is-offset-one-quarter">
                <form class="box" id="form_post" method="post">
                    <div class="field">
                        <!-- <label class="label">Judul</label> -->
                        <div class="control">
                            <input class="input" type="judul" placeholder="Judul postingan.."/>
                        </div>
                    </div>

                    <div class="field">
                        <!-- <label class="label">Password</label> -->
                        <div class="control">
                            <textarea class="input" id="isi" name="isi"></textarea>
                        </div>
                    </div>
                    <button class="button is-light" name="btn_simpan">Simpan</button>
                    <button class="button is-warning" name="btn_publish">Publish</button>
                </form>
            </div>
        </div>
    </div>

    <script>

        // # Init Editor
        $('#isi').summernote({
            placeholder: 'Tulis ceritamu..',
            tabsize: 2,
            height: 360,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['codeview', 'help']]
            ]
        });

        // # PreventDefault to Form
        $('#form_post').submit(function() {
            return false;
        });

        

    </script>

</body>

</html>