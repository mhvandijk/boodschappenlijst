<?php require('partials/head.php') ?>

<h1>Create Item</h1>


<form method="POST" action="/add">
<table id="mainTable">
    <tbody>
            <tr>
                <td>Product</td>
                <td><input name="productName"></td>
            </tr>
            <tr>
                <td>Aantal</td>
                <td><input name="productQuantity"></td>
            </tr>
            <tr>
                <td>Prijs</td>
                <td><input name="productPrice"></td>
            </tr>
    </tbody>
</table>
<button id="submit">Add to list >></button>
</form>




<?php require('partials/foot.php') ?>