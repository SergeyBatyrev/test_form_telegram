<div class='col-xl-4 col-lg-6 col-md-8 col-sm-10 col-10 mt-5 mx-auto'>
    <div class='text-center bg-primary text-light border rounded-2 fs-4 mb-3'>Тест отправки формы в телеграмм!!!</div>

    <form class="needs-validation" action="telegram.php" method="post" name='my' novalidate>
        <div class="form-floating mb-2">
            <input type="text" class="form-control" id="floatingName" name='name' placeholder="" required>
            <label class="form-label" for="floatingName">имя</label>
            <div id="loatingPasswordFeedback" class="invalid-feedback">
                Укажите имя.
            </div>
        </div>

        <div class="form-floating mb-2">
            <input type="text" class="form-control" id="floatingTel" name="tel" placeholder="">
            <label for="floatingTel">телефон</label>
            <div id="loatingPasswordFeedback2" class="invalid-feedback">
                <span class='teltext'></span>
            </div>
        </div>

        <div class="form-floating">
            <textarea class="form-control" name="coment" placeholder="" id="floatingTextarea"
                style="height: 100px"></textarea>
            <label for="floatingTextarea">Комментарии</label>
            <div id="loatingPasswordFeedback3" class="invalid-feedback">
                Укажите коментарий.
            </div>
        </div>

        <div class="mt-3">
            <button class="btn btn-primary" type="submit">Отправить!</button>
        </div>

    </form>
</div>