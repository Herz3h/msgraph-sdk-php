<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SizeRange File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* SizeRange class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class SizeRange extends Entity
{
    /**
    * Gets the minimumSize
    *
    * @return int The minimumSize
    */
    public function getMinimumSize()
    {
        if (array_key_exists("minimumSize", $this->_propDict)) {
            return $this->_propDict["minimumSize"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minimumSize
    *
    * @param int $val The value of the minimumSize
    *
    * @return SizeRange
    */
    public function setMinimumSize($val)
    {
        $this->_propDict["minimumSize"] = $val;
        return $this;
    }
    /**
    * Gets the maximumSize
    *
    * @return int The maximumSize
    */
    public function getMaximumSize()
    {
        if (array_key_exists("maximumSize", $this->_propDict)) {
            return $this->_propDict["maximumSize"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maximumSize
    *
    * @param int $val The value of the maximumSize
    *
    * @return SizeRange
    */
    public function setMaximumSize($val)
    {
        $this->_propDict["maximumSize"] = $val;
        return $this;
    }
}
