<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows81VpnConfiguration File
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
* Windows81VpnConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Windows81VpnConfiguration extends WindowsVpnConfiguration
{
    /**
    * Gets the applyOnlyToWindows81
    *
    * @return bool The applyOnlyToWindows81
    */
    public function getApplyOnlyToWindows81()
    {
        if (array_key_exists("applyOnlyToWindows81", $this->_propDict)) {
            return $this->_propDict["applyOnlyToWindows81"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applyOnlyToWindows81
    *
    * @param bool $val The applyOnlyToWindows81
    *
    * @return Windows81VpnConfiguration
    */
    public function setApplyOnlyToWindows81($val)
    {
        $this->_propDict["applyOnlyToWindows81"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the connectionType
    *
    * @return WindowsVpnConnectionType The connectionType
    */
    public function getConnectionType()
    {
        if (array_key_exists("connectionType", $this->_propDict)) {
            if (is_a($this->_propDict["connectionType"], "Microsoft\Graph\Model\WindowsVpnConnectionType")) {
                return $this->_propDict["connectionType"];
            } else {
                $this->_propDict["connectionType"] = new WindowsVpnConnectionType($this->_propDict["connectionType"]);
                return $this->_propDict["connectionType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the connectionType
    *
    * @param WindowsVpnConnectionType $val The connectionType
    *
    * @return Windows81VpnConfiguration
    */
    public function setConnectionType($val)
    {
        $this->_propDict["connectionType"] = $val;
        return $this;
    }
    
    /**
    * Gets the loginGroupOrDomain
    *
    * @return string The loginGroupOrDomain
    */
    public function getLoginGroupOrDomain()
    {
        if (array_key_exists("loginGroupOrDomain", $this->_propDict)) {
            return $this->_propDict["loginGroupOrDomain"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the loginGroupOrDomain
    *
    * @param string $val The loginGroupOrDomain
    *
    * @return Windows81VpnConfiguration
    */
    public function setLoginGroupOrDomain($val)
    {
        $this->_propDict["loginGroupOrDomain"] = $val;
        return $this;
    }
    
    /**
    * Gets the enableSplitTunneling
    *
    * @return bool The enableSplitTunneling
    */
    public function getEnableSplitTunneling()
    {
        if (array_key_exists("enableSplitTunneling", $this->_propDict)) {
            return $this->_propDict["enableSplitTunneling"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enableSplitTunneling
    *
    * @param bool $val The enableSplitTunneling
    *
    * @return Windows81VpnConfiguration
    */
    public function setEnableSplitTunneling($val)
    {
        $this->_propDict["enableSplitTunneling"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the proxyServer
    *
    * @return Windows81VpnProxyServer The proxyServer
    */
    public function getProxyServer()
    {
        if (array_key_exists("proxyServer", $this->_propDict)) {
            if (is_a($this->_propDict["proxyServer"], "Microsoft\Graph\Model\Windows81VpnProxyServer")) {
                return $this->_propDict["proxyServer"];
            } else {
                $this->_propDict["proxyServer"] = new Windows81VpnProxyServer($this->_propDict["proxyServer"]);
                return $this->_propDict["proxyServer"];
            }
        }
        return null;
    }
    
    /**
    * Sets the proxyServer
    *
    * @param Windows81VpnProxyServer $val The proxyServer
    *
    * @return Windows81VpnConfiguration
    */
    public function setProxyServer($val)
    {
        $this->_propDict["proxyServer"] = $val;
        return $this;
    }
    
}