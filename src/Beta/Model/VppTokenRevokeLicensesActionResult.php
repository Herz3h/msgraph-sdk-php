<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VppTokenRevokeLicensesActionResult File
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
* VppTokenRevokeLicensesActionResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class VppTokenRevokeLicensesActionResult extends VppTokenActionResult
{
    /**
    * Gets the totalLicensesCount
    *
    * @return int The totalLicensesCount
    */
    public function getTotalLicensesCount()
    {
        if (array_key_exists("totalLicensesCount", $this->_propDict)) {
            return $this->_propDict["totalLicensesCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalLicensesCount
    *
    * @param int $val The value of the totalLicensesCount
    *
    * @return VppTokenRevokeLicensesActionResult
    */
    public function setTotalLicensesCount($val)
    {
        $this->_propDict["totalLicensesCount"] = $val;
        return $this;
    }
    /**
    * Gets the failedLicensesCount
    *
    * @return int The failedLicensesCount
    */
    public function getFailedLicensesCount()
    {
        if (array_key_exists("failedLicensesCount", $this->_propDict)) {
            return $this->_propDict["failedLicensesCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the failedLicensesCount
    *
    * @param int $val The value of the failedLicensesCount
    *
    * @return VppTokenRevokeLicensesActionResult
    */
    public function setFailedLicensesCount($val)
    {
        $this->_propDict["failedLicensesCount"] = $val;
        return $this;
    }

    /**
    * Gets the actionFailureReason
    *
    * @return VppTokenActionFailureReason The actionFailureReason
    */
    public function getActionFailureReason()
    {
        if (array_key_exists("actionFailureReason", $this->_propDict)) {
            if (is_a($this->_propDict["actionFailureReason"], "Microsoft\Graph\Model\VppTokenActionFailureReason")) {
                return $this->_propDict["actionFailureReason"];
            } else {
                $this->_propDict["actionFailureReason"] = new VppTokenActionFailureReason($this->_propDict["actionFailureReason"]);
                return $this->_propDict["actionFailureReason"];
            }
        }
        return null;
    }

    /**
    * Sets the actionFailureReason
    *
    * @param VppTokenActionFailureReason $val The value to assign to the actionFailureReason
    *
    * @return VppTokenRevokeLicensesActionResult The VppTokenRevokeLicensesActionResult
    */
    public function setActionFailureReason($val)
    {
        $this->_propDict["actionFailureReason"] = $val;
         return $this;
    }
}
