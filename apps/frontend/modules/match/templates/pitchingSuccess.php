<div>pitching mode</div>

<div>
<ul>
  <li>You 1 - 0 Opposing</li>
  <li>BALL 3</li>
  <li>STRIKE 2</li>
  <li>OUT 2</li>
  <li>RUNNER 1,2,3</li>
</ul>
</div>
<form action="<?php echo url_for('match/psubmit') ?>" method="POST">
  <table>
    <?php echo $form ?>
    <tr>
      <td colspan="2">
        <input type="submit" />
      </td>
    </tr>
  </table>
</form>
