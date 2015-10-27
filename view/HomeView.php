<?php

/*
 * @author Nick Lashinski
 */

namespace view;

class HomeView {

    /**
     * Returns HTML for the home page
     * @return HTML
     */
    public function doView() {
        return $this->generateHomeHTML();
    }

    /**
     * Generates HTML for the home page
     * @return HTML
     */
    private function generateHomeHTML() {
        return "<form method='post' > 
				<fieldset>
					<legend>Welcome to Homework Tools</legend>
                                        </br>
                                        <h2>Please Select a Tool Above</h2>
                                        </br>
				</fieldset>
			</form>
		";
    }

}
