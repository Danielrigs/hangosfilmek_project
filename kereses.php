<?php
    require "fejlec.html";
?>
    <div class="container">
        <form action="" class="w-75 mx-auto">
            <label for="keresesAlapja" class="form-label">Kérem válasszon</label>
            <select class="form-select" id="keresesAlapja">
                <option value="nev" selected>Keresés név alapján</option>
                <option value="film">Keresés film alapján</option>
            </select>
            <input type="text" class="form-control my-2" id="szoveg">
            <button type="button" class="btn btn-dark">Keresés</button>
        </form>
    </div>


    <script src="js/js2.js"></script>
<?php
    require "lablec.html";
?>