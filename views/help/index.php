<?php

use yii\helpers\Html;

$this->title='Help Center';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="help-about">

    <h2> <?=Html::encode($this->title) ?></h2>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad blanditiis, ab provident eos incidunt explicabo? Incidunt ab doloribus distinctio minima accusantium sint libero esse molestiae velit earum ad expedita placeat quis id odio eaque, quasi totam dignissimos perspiciatis necessitatibus voluptatem dolorem maiores? Quas minus repellat corrupti rerum unde ullam, pariatur illo laborum voluptatibus, recusandae doloremque minima? Quibusdam voluptatum veniam pariatur laudantium ipsum voluptatibus doloremque, accusamus aut, deserunt maiores labore vero ipsa sit nesciunt hic, explicabo vel autem aperiam. Laborum vitae eveniet nostrum quod reiciendis velit. Eius recusandae sint, necessitatibus inventore labore ad consequuntur sapiente, laudantium eum, ullam distinctio delectus in aliquid reprehenderit numquam? Quisquam minima reiciendis molestiae quas aliquid, pariatur deleniti blanditiis nihil aliquam ipsum possimus, tempora distinctio cupiditate debitis similique? Delectus deleniti ipsa quia nihil iusto dolorum id tempora officiis consectetur molestiae hic dolore, quam alias cum? Explicabo aperiam, voluptate quas corporis consectetur consequuntur repudiandae cum ab minima recusandae laudantium deserunt alias vitae at minus error quos! Nihil in doloremque unde, quod enim aliquam architecto doloribus nostrum ipsum ad, facilis velit aspernatur ab amet cumque ea tempore, dolor quibusdam ipsam esse saepe rem impedit animi! At debitis, numquam iusto hic ea a omnis modi amet natus sint, esse quasi!</p>

    <div>
        <?= Html::a('Account Settings', ['help/account-settings']) ?>
    </div>

    <div>
        <?= Html::a('Login and Security', ['help/login-and-security']) ?>
    </div>

    <div>
        <?= Html::a('Privacy', ['help/privacy']) ?>
    </div>

</div>



