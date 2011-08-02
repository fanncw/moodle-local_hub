<?php // $Revision: 2.1 $

/************************************************************************/
/* phpAdsNew 2                                                          */
/* ===========                                                          */
/*                                                                      */
/* Copyright (c) 2000-2002 by the phpAdsNew developers                  */
/* For more information visit: http://www.phpadsnew.com                 */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/


// Main strings
$GLOBALS['strChooseSection']			= "�������� ������";


// Priority
$GLOBALS['strRecalculatePriority']		= "����������� ����������";
$GLOBALS['strHighPriorityCampaigns']		= "�������� � ������� �����������";
$GLOBALS['strAdViewsAssigned']			= "�������� ����������";
$GLOBALS['strLowPriorityCampaigns']		= "�������� � ������ �����������";
$GLOBALS['strPredictedAdViews']			= "����������� ����������";
$GLOBALS['strPriorityDaysRunning']		= "������ �������� {days} ���� ����������, �� ������� ".$phpAds_productname." ����� ���������� ���� ������������. ";
$GLOBALS['strPriorityBasedLastWeek']		= "������������ �������� �� ������ �� ���� � ������� ������. ";
$GLOBALS['strPriorityBasedYesterday']		= "������������ �������� �� ������ �� �����. ";
$GLOBALS['strPriorityNoData']			= "������������ ������ ��� �������� ������������ ���������� �������, ������� ������ ������ ����������� �������. ���������� ���������� ����� ������������ �� ����������, ���������� � �������� �������. ";
$GLOBALS['strPriorityEnoughAdViews']		= "������ ���� ���������� ������� ��� �������������� ���������� ���� ������������������ ��������. ";
$GLOBALS['strPriorityNotEnoughAdViews']		= "����������, ����� �� ������� ������������� ���������� ������� ��� �������������� ���������� ���� ����������������� ��������. ";


// Banner cache
$GLOBALS['strRebuildBannerCache']		= "��������� ��� �������� ������";
$GLOBALS['strBannerCacheExplaination']		= "
	��� �������� �������� ����� HTML-����, ������������� ��� ������ �������. ������������� ���� ��������� ��������
	�������� ��������, ��������� HTML-��� �� ����� ������������ ��� ������� ������ �������. ���������
	��� �������� ����� �������������� ������ �� ������������ ".$phpAds_productname." � ����� ��������, ��� ����� �������������
	��� ������ ����������� ".$phpAds_productname." �� ����������.
";


// Zone cache
$GLOBALS['strAge']				= "����";
$GLOBALS['strCache']                    = "��� ��������";
$GLOBALS['strRebuildDeliveryCache']                     = "�������� ��� ��������";
$GLOBALS['strDeliveryCacheExplaination']                = "
        ��� �������� ������������ ��� ��������� �������� ��������. ��� �������� ����� ���� ��������,
        ����������� � ����/ ��� �������� ��������� �������� � ���� ������ � ������ ������������ ������ ������� ������������. ���
        ������ ����������� ����� ������� ��������� � ���� ��� ����� �� ����������� � ��� ��������, ��, ��������, �� ����� ����������. �������
        ��� ����� ����������� ������������� ������ ���, ��� ����� ���� ������� �������.
";
$GLOBALS['strDeliveryCacheSharedMem']           = "
        ��� �������� ���� �������� ������������ ����������� ������.
";
$GLOBALS['strDeliveryCacheDatabase']            = "
        ��� �������� ���� �������� ������������ ���� ������.
";


// Storage
$GLOBALS['strStorage']				= "��������";
$GLOBALS['strMoveToDirectory']			= "����������� �������� �� ���� ������ � �������";
$GLOBALS['strStorageExplaination']		= "
	��������, ������������ ���������� ���������, �������� � ���� ������ ��� � ��������. ���� �� ������ ������� �������� 
	� �������� �� �����, �������� �� ���� ������ ����������, � ��� ������� � ���������.
";


// Storage
$GLOBALS['strStatisticsExplaination']		= "
	�� �������� <i>���������� ����������</i>, �� ���� ������ ���������� �� ��� � ����������� �������. 
	������ ������������� ���� ����������� ���������� � ����� ���������� ������?
";


// Product Updates
$GLOBALS['strSearchingUpdates']			= "������ ����������. ����������, ���������...";
$GLOBALS['strAvailableUpdates']			= "��������� ����������";
$GLOBALS['strDownloadZip']			= "������� (.zip)";
$GLOBALS['strDownloadGZip']			= "������� (.tar.gz)";

$GLOBALS['strUpdateAlert']			= "�������� ����� ������ ".$phpAds_productname."                               \\n\\n������ ������ ������ \\n�� ���� ����������?";
$GLOBALS['strUpdateAlertSecurity']		= "�������� ����� ������ ".$phpAds_productname."                               \\n\\n������������� ���������� ���������� \\n��� ����� ������, ��� ��� ��� \\n������ �������� ���� ��� ��������� �����������, ����������� � ������������.";

$GLOBALS['strUpdateServerDown']			= "
    �� ����������� ������� ���������� �������� ���������� <br>
	� ��������� �����������. ����������, ����������� �������.
";

$GLOBALS['strNoNewVersionAvailable']		= "
	���� ������ ".$phpAds_productname." �� ������� ����������. ������� ���������� � ��������� ����� ���.
";

$GLOBALS['strNewVersionAvailable']		= "
	<b>�������� ����� ������ ".$phpAds_productname."</b><br> ������������� ���������� ��� ����������,
	��������� ��� ����� ��������� ��������� ������������ �������� � �������� ����� ����������������. �� ��������������
	����������� �� ���������� ���������� � ������������, ��������� � ����������������� �����.
";

$GLOBALS['strSecurityUpdate']			= "
	<b>������������ ������������� ���������� ��� ���������� ��� ����� ������, ��������� ��� �������� ���������
	�����������, ��������� � �������������.</b> ������ ".$phpAds_productname.", ������� �� ������ �����������, ����� ���� 
	���������� ����������� ������, �, ��������, �� ���������. �� ��������������
	����������� �� ���������� ���������� � ������������, ��������� � ����������������� �����.
";

$GLOBALS['strNotAbleToCheck']                   = "
        <b>��������� ������ ��������� XML �� ���������� �� ����� �������, ".$phpAds_productname." �� �����
    ��������� ������� ����� ������ ������.</b>
";

$GLOBALS['strForUpdatesLookOnWebsite']  = "
        �� ������ ����������� ".$phpAds_productname." ".$phpAds_version_readable.". 
        ���� �� ������ ������, ��� �� ����� ����� ������, �������� ��� �������.
";

$GLOBALS['strClickToVisitWebsite']              = "
        ٸ������ �����, ����� �������� ��� �������
";


// Stats conversion
$GLOBALS['strConverting']			= "��������������";
$GLOBALS['strConvertingStats']			= "��������������� ����������...";
$GLOBALS['strConvertStats']			= "������������� ����������";
$GLOBALS['strConvertAdViews']			= "������ �������������,";
$GLOBALS['strConvertAdClicks']			= "����� �������������...";
$GLOBALS['strConvertNothing']			= "������ ���������������...";
$GLOBALS['strConvertFinished']			= "���������...";

$GLOBALS['strConvertExplaination']		= "
	�� ������ ����������� ���������� ������ �������� ����� ����������, �� � ��� �� ��� ���� <br>
	��������� ������ � ����������� �������. �� ��� ��� ���� ����������� ���������� �� �����  <br>
	������������� � ���������� ������, ��� �� ����� �������������� ��� ��������� ���� �������.  <br>
	����� ��������������� ����������, �������� ��������� ����� ���� ������!  <br>
	�� ������ ������������� ���� ����������� ���������� � ����� ���������� ������? <br>
";

$GLOBALS['strConvertingExplaination']		= "
	��� ���������� ����������� ���������� ������ ������������� � ���������� ������. <br>
	� ����������� �� ����, ������� ������� ��������� � ����������� �������, ��� ����� ������  <br>
	��������� �����. ����������, ��������� ��������� ��������������, ������ ��� �� �������� �� ������ <br>
	��������pages. ���� �� ������� ������ ���� ���������, ������������ � ���� ������. <br>
";

$GLOBALS['strConvertFinishedExplaination']  	= "
	�������������� ������������ ����������� ���������� ���� �������� � ��� ������ <br>
	������ ���� ������ ��������. ���� �� ������ ������� ������ ���� ���������, <br>
	������������ � ���� ������.<br>
";


?>
