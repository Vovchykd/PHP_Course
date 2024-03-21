<?php

/**
 * Modified: 2019-10-12T20:10:10+00:00  API: 16.0.19402.12016
 */
namespace Office365\SharePoint\Sharing;

use Office365\Runtime\ClientValue;

class SiteSharingReportJobData extends ClientValue
{
    /**
     * @var string
     */
    public $folderUrl;
    /**
     * @var string
     */
    public $webUrl;
}