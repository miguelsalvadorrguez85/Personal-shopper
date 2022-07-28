<?php
require_once("Components/Layout.php");
require_once("Components/header/header_edit.php");
?>
<body>

    <main>
        <div class="add">
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
        </svg>
            <h2>Edit Shopper</h2>
        </div>
        <form class="justify-content-center" action='?action=update&id=<?php echo $data["customer"]->getId()?>'method="post">
        <a href="?action=create"><input class="btn btn-primary" type="reset" value="Reset"></a>
            <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Name</label>
            <input class="form-control" type="text" name="name" required value='<?php echo $data["customer"]->getName() ?>'>
            </div>
            <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Age</label>
            <input class="form-control" type="text" name="age" required value='<?php echo $data["customer"]->getAge() ?>'>
            </div>
            <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Phone</label>
            <input class="form-control" type="text" name="phone" required value='<?php echo $data["customer"]->getPhone() ?>'>
            </div>
            <div class="row g-3">
                <div class="col">
                    <label for="formGroupExampleInput" class="form-label">Weight</label>
                    <input class="form-control" type="text" name="weight" required value='<?php echo $data["customer"]->getWeight() ?>'>
                </div>
                <div class="col">
                    <label for="formGroupExampleInput" class="form-label">Height</label>
                    <input class="form-control" type="text" name="height" required value='<?php echo $data["customer"]->getHeight() ?>'>
                </div>
                <div class="col">
                    <label for="formGroupExampleInput" class="form-label"> Shoes Size</label>
                    <input class="form-control" type="text" name="shoes_size" required value='<?php echo $data["customer"]->getShoes_Size() ?>'>
                </div>
            </div>
            
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sex" id="inlineRadio1" required value='<?php echo $data["customer"]->getSex() ?>'>
                <label class="form-check-label" for="inlineRadio1">Men</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sex" id="inlineRadio2" required value='<?php echo $data["customer"]->getSex() ?>'>
                <label class="form-check-label" for="inlineRadio2">Female</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sex" id="inlineRadio3" required value='<?php echo $data["customer"]->getSex() ?>'>
                <label class="form-check-label" for="inlineRadio3">Non-Binary</label>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">appointment reason</label>
                <input class="form-control" type="text" name="reason" required value='<?php echo $data["customer"]->getReason() ?>'>
            </div class >
            <div class="justify-content-center">
                <button onclick="window.location.href='/Personal-Shopper'" id="cancel" class="btn btn-outline-dark" type="submit">Cancel</button>
                <input id="send" class="btn btn-outline-dark" type="submit" value="Edit" />
            <div>
        </form>
    </main>


</body>
<?php 
    require_once("Components/footer/footer_edit.php");
?>