<?php require('partials/head.php') ?>

<h1>Boodschappenlijst</h1>
<table id="mainTable">
    <tbody>
        <tr>
            <th>Product</th>
            <th>Aantal</th>
            <th>Prijs</th>
            <th>Subtotaal</th>
        </tr>
        <?php foreach ($results as $product) : ?>
            <tr>
                <td class="name"><?= $product->getName() ?></td>
                <td class="getal"><?= $product->getNumber() ?></td>
                <td class="bedrag"><?= toDouble($product->getPrice()) ?></td>
                <td class="bedrag"><?= toDouble($product->getTotal()) ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="3" class="bedrag">Totaal</td>
            <td class="totalCost bedrag"><?= toDouble($totaalBoodschappen) ?></td>
        </tr>
    </tbody>
</table>


<?php require('partials/foot.php') ?>