<h1>Prices List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Shop</th>
      <th>Category</th>
      <th>Nyuukaikin</th>
      <th>Shimeiryou</th>
      <th>Netshimei</th>
      <th>Title col1</th>
      <th>Title col2</th>
      <th>Title col3</th>
      <th>Title col4</th>
      <th>Title col5</th>
      <th>Title row1</th>
      <th>Title row2</th>
      <th>Title row3</th>
      <th>Title row4</th>
      <th>Title row5</th>
      <th>Row1col1</th>
      <th>Row1col2</th>
      <th>Row1col3</th>
      <th>Row1col4</th>
      <th>Row1col5</th>
      <th>Row2col1</th>
      <th>Row2col2</th>
      <th>Row2col3</th>
      <th>Row2col4</th>
      <th>Row2col5</th>
      <th>Row3col1</th>
      <th>Row3col2</th>
      <th>Row3col3</th>
      <th>Row3col4</th>
      <th>Row3col5</th>
      <th>Row4col1</th>
      <th>Row4col2</th>
      <th>Row4col3</th>
      <th>Row4col4</th>
      <th>Row4col5</th>
      <th>Row5col1</th>
      <th>Row5col2</th>
      <th>Row5col3</th>
      <th>Row5col4</th>
      <th>Row5col5</th>
      <th>Entyou</th>
      <th>Entyou kakaku</th>
      <th>Option1 title</th>
      <th>Option2 title</th>
      <th>Option3 title</th>
      <th>Option4 title</th>
      <th>Option5 title</th>
      <th>Option6 title</th>
      <th>Option7 title</th>
      <th>Option8 title</th>
      <th>Option9 title</th>
      <th>Option10 title</th>
      <th>Option1 price</th>
      <th>Option2 price</th>
      <th>Option3 price</th>
      <th>Option4 price</th>
      <th>Option5 price</th>
      <th>Option6 price</th>
      <th>Option7 price</th>
      <th>Option8 price</th>
      <th>Option9 price</th>
      <th>Option10 price</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($prices as $price): ?>
    <tr>
      <td><a href="<?php echo url_for('price/edit?id='.$price->getId()) ?>"><?php echo $price->getId() ?></a></td>
      <td><?php echo $price->getShopId() ?></td>
      <td><?php echo $price->getCategoryId() ?></td>
      <td><?php echo $price->getNyuukaikin() ?></td>
      <td><?php echo $price->getShimeiryou() ?></td>
      <td><?php echo $price->getNetshimei() ?></td>
      <td><?php echo $price->getTitleCol1() ?></td>
      <td><?php echo $price->getTitleCol2() ?></td>
      <td><?php echo $price->getTitleCol3() ?></td>
      <td><?php echo $price->getTitleCol4() ?></td>
      <td><?php echo $price->getTitleCol5() ?></td>
      <td><?php echo $price->getTitleRow1() ?></td>
      <td><?php echo $price->getTitleRow2() ?></td>
      <td><?php echo $price->getTitleRow3() ?></td>
      <td><?php echo $price->getTitleRow4() ?></td>
      <td><?php echo $price->getTitleRow5() ?></td>
      <td><?php echo $price->getRow1col1() ?></td>
      <td><?php echo $price->getRow1col2() ?></td>
      <td><?php echo $price->getRow1col3() ?></td>
      <td><?php echo $price->getRow1col4() ?></td>
      <td><?php echo $price->getRow1col5() ?></td>
      <td><?php echo $price->getRow2col1() ?></td>
      <td><?php echo $price->getRow2col2() ?></td>
      <td><?php echo $price->getRow2col3() ?></td>
      <td><?php echo $price->getRow2col4() ?></td>
      <td><?php echo $price->getRow2col5() ?></td>
      <td><?php echo $price->getRow3col1() ?></td>
      <td><?php echo $price->getRow3col2() ?></td>
      <td><?php echo $price->getRow3col3() ?></td>
      <td><?php echo $price->getRow3col4() ?></td>
      <td><?php echo $price->getRow3col5() ?></td>
      <td><?php echo $price->getRow4col1() ?></td>
      <td><?php echo $price->getRow4col2() ?></td>
      <td><?php echo $price->getRow4col3() ?></td>
      <td><?php echo $price->getRow4col4() ?></td>
      <td><?php echo $price->getRow4col5() ?></td>
      <td><?php echo $price->getRow5col1() ?></td>
      <td><?php echo $price->getRow5col2() ?></td>
      <td><?php echo $price->getRow5col3() ?></td>
      <td><?php echo $price->getRow5col4() ?></td>
      <td><?php echo $price->getRow5col5() ?></td>
      <td><?php echo $price->getEntyou() ?></td>
      <td><?php echo $price->getEntyouKakaku() ?></td>
      <td><?php echo $price->getOption1Title() ?></td>
      <td><?php echo $price->getOption2Title() ?></td>
      <td><?php echo $price->getOption3Title() ?></td>
      <td><?php echo $price->getOption4Title() ?></td>
      <td><?php echo $price->getOption5Title() ?></td>
      <td><?php echo $price->getOption6Title() ?></td>
      <td><?php echo $price->getOption7Title() ?></td>
      <td><?php echo $price->getOption8Title() ?></td>
      <td><?php echo $price->getOption9Title() ?></td>
      <td><?php echo $price->getOption10Title() ?></td>
      <td><?php echo $price->getOption1Price() ?></td>
      <td><?php echo $price->getOption2Price() ?></td>
      <td><?php echo $price->getOption3Price() ?></td>
      <td><?php echo $price->getOption4Price() ?></td>
      <td><?php echo $price->getOption5Price() ?></td>
      <td><?php echo $price->getOption6Price() ?></td>
      <td><?php echo $price->getOption7Price() ?></td>
      <td><?php echo $price->getOption8Price() ?></td>
      <td><?php echo $price->getOption9Price() ?></td>
      <td><?php echo $price->getOption10Price() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('price/new') ?>">New</a>
