<?php
/**
 * Copyright 2017 IBM Corp. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace WatsonSDK\Services\Assistant;

use WatsonSDK\Common\ServiceModel;

/**
 * Assistant UpdateCounterexample model
 */
class UpdateCounterexampleModel extends ServiceModel {

    /**
     * @name(workspace_id)
     *
     * The id of the workspace.
     *
     * @var string
     */
    protected $_workspace_id;

    /**
     * @name(text)
     * 
     * The text of a user input example. 
     * 
     * @var string
     */
    protected $_text;

    /**
     * @name(text)
     *
     * The new text of a user input example.
     *
     * @var string
     */
    protected $_new_text;

    /**
     * Constructor.
     *
     * @param string $text
     */
    function __construct($workspace_id, $text, $new_text) {
        
        $this->setWorkspaceId($workspace_id);
        $this->setText($text);
        $this->setNewText($new_text);
    }

    /**
     * Get the id of the workspace.
     *
     * @return string
     */
    public function getWorkspaceId() {
        return $this->_workspace_id;
    }

    /**
     * Set the id of the workspace.
     *
     * @param $val string
     */
    public function setWorkspaceId($val) {
        $this->_workspace_id = $val;
    }

    /**
     * Get the text of a user input example.
     * 
     * @return string
     */
    public function getText() {
        return $this->_text;
    }

    /**
     * Set the text of a user input example.
     * 
     * @param $val string
     */
    public function setText($val) {
        $this->_text = $val;
    }
    
    /**
     * Get the new text of a user input example.
     *
     * @return string
     */
    public function getNewText() {
        return $this->_new_text;
    }
    
    /**
     * Set the new text of a user input example.
     *
     * @param $val string
     */
    public function setNewText($val) {
        $this->_new_text = $val;
    }

}