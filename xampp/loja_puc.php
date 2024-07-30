<?php
/**
 * Created by PhpStorm.
 * User: thiagogaspar
 * Date: 02/10/2018
 * Time: 11:25
 */

$xml = simplexml_load_file('loja.xml');

?>

<table>
    <thead>
        <tr>
            <th>Código Compra</th>
            <th>Descrição Produto</th>
            <th>Quantidade</th>
            <th>Preço</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach ($xml->compra as $compra) {
        $totalCompra = 0;
        foreach ($compra->lista->produto as $lista) {
            echo "<tr>";
            echo "<td>$compra->codigo</td>";
            echo "<td>$lista->descricao </td>";
            echo "<td> $lista->quantidade </td>";
            echo "<td>$lista->preco </td>";
            $totalCompra += $lista->preco * $lista->quantidade . "<br>";
            echo "</tr>";
        }
        echo "<tr>";
        echo "<td ><b>Total Compra : </b></td>";
        echo "<td ><b>$totalCompra </b></td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
