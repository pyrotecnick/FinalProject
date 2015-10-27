<?php
/**
 * @author Nick Lashinski
 */

namespace view;

class LayoutView {

    /**
     * Sets up the layout HTML that goes around the selected tool
     * @param view $view 
     * @param \view\DateTimeView $dtv
     */
    public function render($view, DateTimeView $dtv) {
        ?>
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8">
                <title>Study Tools</title>
            </head>
            <body>
                <h1>Final Project</h1>
                <?php
                echo'<a href="?">Home | </a>';
                echo'<a href="?calculator"> Calculator | </a>';
                echo'<a href="?converter"> Unit Converter | </a>';
                echo'<a href="?periodictable"> Periodic Table</a>';
                ?>
                <div class="container" >
                    <?php
                    echo $view->doView();
                    $dtv->show();
                    ?>
                </div>
            </body>
        </html>
        <?php
    }

}
