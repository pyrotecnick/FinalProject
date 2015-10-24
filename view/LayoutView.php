<?php
/**
 * @author Nick Lashinski
 */

namespace view;

class LayoutView {

    public function render(CalculatorView $v, DateTimeView $dtv) {
        ?>
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8">
                <title>Study Tools</title>
            </head>
            <body>
                <h1>Final Project</h1>
                <div class="container" >
                    <?php
                    echo $v->doCalculator();
                    $dtv->show();
                    ?>
                </div>
            </body>
        </html>
        <?php
    }

}
