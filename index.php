<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php

    include_once("form.php");

    ?>
    <script>
        debugger
        const regex = /^\d+$/;
        let form = document.forms[0];
        let teltext = document.querySelector('.teltext');

        form.addEventListener('submit', function (e) {
            let name = form.elements.name;
            let tel = form.elements.tel;
            let coment = form.elements.coment;


            if (name.value != '' && tel.value != '' && regex.test(tel.value) != false && coment.value != '') {
                name.classList.remove('is-invalid');
                name.classList.add('is-valid');
                tel.classList.remove('is-invalid');
                tel.classList.add('is-valid');
                coment.classList.remove('is-invalid');
                coment.classList.add('is-valid');
                // e.preventDefault();
            }

            else {
                if (name.value == '') {
                    name.classList.add('is-invalid');
                }
                else name.classList.add('is-valid');
                if (name.value != '' && name.classList.contains('is-invalid')) {
                    name.classList.remove('is-invalid');
                    name.classList.add('is-valid');
                }


                if (tel.value == '') {
                    tel.classList.add('is-invalid');
                    teltext.innerHTML = 'укажите телефон.';
                }
                if (tel.value != '' && regex.test(tel.value) == false) {
                    tel.classList.add('is-invalid');
                    teltext.innerHTML = 'только цифры.';
                }

                if (tel.value != '' && tel.classList.contains('is-invalid') && regex.test(tel.value) != false) {
                    tel.classList.remove('is-invalid');
                    tel.classList.add('is-valid');
                }


                if (coment.value == '') {
                    coment.classList.add('is-invalid');
                }
                else coment.classList.add('is-valid');
                if (coment.value != '' && coment.classList.contains('is-invalid')) {
                    coment.classList.remove('is-invalid');
                    coment.classList.add('is-valid');
                }
                e.preventDefault();
            }
        });
    </script>
</body>

</html>