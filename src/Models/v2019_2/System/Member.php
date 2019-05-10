<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Member Version v2019_2
 *
 * Model for Member
 *
 * @property Carbon\Carbon $hireDate
 * @property Carbon\Carbon $inactiveDate
 * @property Carbon\Carbon $timeSheetStartDate
 * @property Spinen\ConnectWise\Models\v2019_2\System\BoardReference $serviceDefaultBoard
 * @property Spinen\ConnectWise\Models\v2019_2\System\CalendarReference $calendar
 * @property Spinen\ConnectWise\Models\v2019_2\System\CountryReference $country
 * @property Spinen\ConnectWise\Models\v2019_2\System\DocumentReference $photo
 * @property Spinen\ConnectWise\Models\v2019_2\System\LdapConfigurationReference $ldapConfiguration
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberReference $expenseApprover
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberReference $reportsTo
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberReference $timeApprover
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_2\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_2\System\ProjectBoardReference $projectDefaultBoard
 * @property Spinen\ConnectWise\Models\v2019_2\System\ReportCardReference $reportCard
 * @property Spinen\ConnectWise\Models\v2019_2\System\SecurityRoleReference $securityRole
 * @property Spinen\ConnectWise\Models\v2019_2\System\ServiceLocationReference $serviceLocation
 * @property Spinen\ConnectWise\Models\v2019_2\System\StructureReference $structureLevel
 * @property Spinen\ConnectWise\Models\v2019_2\System\SystemDepartmentReference $defaultDepartment
 * @property Spinen\ConnectWise\Models\v2019_2\System\SystemDepartmentReference $projectDefaultDepartment
 * @property Spinen\ConnectWise\Models\v2019_2\System\SystemDepartmentReference $scheduleDefaultDepartment
 * @property Spinen\ConnectWise\Models\v2019_2\System\SystemDepartmentReference $serviceDefaultDepartment
 * @property Spinen\ConnectWise\Models\v2019_2\System\SystemLocationReference $defaultLocation
 * @property Spinen\ConnectWise\Models\v2019_2\System\SystemLocationReference $projectDefaultLocation
 * @property Spinen\ConnectWise\Models\v2019_2\System\SystemLocationReference $salesDefaultLocation
 * @property Spinen\ConnectWise\Models\v2019_2\System\SystemLocationReference $scheduleDefaultLocation
 * @property Spinen\ConnectWise\Models\v2019_2\System\SystemLocationReference $securityLocation
 * @property Spinen\ConnectWise\Models\v2019_2\System\SystemLocationReference $serviceDefaultLocation
 * @property Spinen\ConnectWise\Models\v2019_2\System\TimeZoneSetupReference $timeZone
 * @property Spinen\ConnectWise\Models\v2019_2\System\WarehouseBinReference $warehouseBin
 * @property Spinen\ConnectWise\Models\v2019_2\System\WarehouseReference $warehouse
 * @property Spinen\ConnectWise\Models\v2019_2\System\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2019_2\System\WorkTypeReference $workType
 * @property array $excludedProjectBoardIds
 * @property array $excludedServiceBoardIds
 * @property array $serviceBoardTeamIds
 * @property boolean $adminFlag
 * @property boolean $allowExpensesEnteredAgainstCompaniesFlag
 * @property boolean $allowInCellEntryOnTimeSheet
 * @property boolean $calendarSyncIntegrationFlag
 * @property boolean $disableOnlineFlag
 * @property boolean $enableLdapAuthenticationFlag
 * @property boolean $enableMobileFlag
 * @property boolean $enableMobileGpsFlag
 * @property boolean $enterTimeAgainstCompanyFlag
 * @property boolean $hideMemberInDispatchPortalFlag
 * @property boolean $inactiveFlag
 * @property boolean $includeInUtilizationReportingFlag
 * @property boolean $partnerPortalFlag
 * @property boolean $requireExpenseEntryFlag
 * @property boolean $requireStartAndEndTimeOnTimeEntryFlag
 * @property boolean $requireTimeSheetEntryFlag
 * @property boolean $restrictDefaultSalesTerritoryFlag
 * @property boolean $restrictDefaultWarehouseBinFlag
 * @property boolean $restrictDefaultWarehouseFlag
 * @property boolean $restrictDepartmentFlag
 * @property boolean $restrictLocationFlag
 * @property boolean $restrictProjectDefaultDepartmentFlag
 * @property boolean $restrictProjectDefaultLocationFlag
 * @property boolean $restrictScheduleFlag
 * @property boolean $restrictServiceDefaultDepartmentFlag
 * @property boolean $restrictServiceDefaultLocationFlag
 * @property boolean $timeReminderEmailFlag
 * @property boolean $timebasedOneTimePasswordActivated
 * @property boolean $toastNotificationFlag
 * @property float $billableForecast
 * @property float $dailyCapacity
 * @property float $hourlyCost
 * @property float $hourlyRate
 * @property float $minimumHours
 * @property float $scheduleCapacity
 * @property integer $daysTolerance
 * @property integer $id
 * @property string $agreementInvoicingDisplayOptions
 * @property string $authenticationServiceType
 * @property string $clientId
 * @property string $companyActivityTabFormat
 * @property string $defaultEmail
 * @property string $defaultPhone
 * @property string $employeeIdentifer
 * @property string $firstName
 * @property string $homeEmail
 * @property string $homeExtension
 * @property string $homePhone
 * @property string $identifier
 * @property string $invoiceScreenDefaultTabFormat
 * @property string $invoiceTimeTabFormat
 * @property string $invoicingDisplayOptions
 * @property string $lastLogin
 * @property string $lastName
 * @property string $ldapUserName
 * @property string $licenseClass
 * @property string $mapiName
 * @property string $middleInitial
 * @property string $mobileEmail
 * @property string $mobileExtension
 * @property string $mobilePhone
 * @property string $notes
 * @property string $officeEmail
 * @property string $officeExtension
 * @property string $officePhone
 * @property string $password
 * @property string $remotePackage
 * @property string $remotePackageAccount
 * @property string $remotePackagePassword
 * @property string $remotePackagePlatform
 * @property string $remotePackageUserName
 * @property string $stsUserAdminUrl
 * @property string $title
 * @property string $token
 * @property string $vendorNumber
 */
class Member extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\System\Metadata',
        'adminFlag' => 'boolean',
        'agreementInvoicingDisplayOptions' => 'string',
        'allowExpensesEnteredAgainstCompaniesFlag' => 'boolean',
        'allowInCellEntryOnTimeSheet' => 'boolean',
        'authenticationServiceType' => 'string',
        'billableForecast' => 'float',
        'calendar' => 'Spinen\ConnectWise\Models\v2019_2\System\CalendarReference',
        'calendarSyncIntegrationFlag' => 'boolean',
        'clientId' => 'string',
        'companyActivityTabFormat' => 'string',
        'country' => 'Spinen\ConnectWise\Models\v2019_2\System\CountryReference',
        'dailyCapacity' => 'float',
        'daysTolerance' => 'integer',
        'defaultDepartment' => 'Spinen\ConnectWise\Models\v2019_2\System\SystemDepartmentReference',
        'defaultEmail' => 'string',
        'defaultLocation' => 'Spinen\ConnectWise\Models\v2019_2\System\SystemLocationReference',
        'defaultPhone' => 'string',
        'disableOnlineFlag' => 'boolean',
        'employeeIdentifer' => 'string',
        'enableLdapAuthenticationFlag' => 'boolean',
        'enableMobileFlag' => 'boolean',
        'enableMobileGpsFlag' => 'boolean',
        'enterTimeAgainstCompanyFlag' => 'boolean',
        'excludedProjectBoardIds' => 'array',
        'excludedServiceBoardIds' => 'array',
        'expenseApprover' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberReference',
        'firstName' => 'string',
        'hideMemberInDispatchPortalFlag' => 'boolean',
        'hireDate' => 'Carbon\Carbon',
        'homeEmail' => 'string',
        'homeExtension' => 'string',
        'homePhone' => 'string',
        'hourlyCost' => 'float',
        'hourlyRate' => 'float',
        'id' => 'integer',
        'identifier' => 'string',
        'inactiveDate' => 'Carbon\Carbon',
        'inactiveFlag' => 'boolean',
        'includeInUtilizationReportingFlag' => 'boolean',
        'invoiceScreenDefaultTabFormat' => 'string',
        'invoiceTimeTabFormat' => 'string',
        'invoicingDisplayOptions' => 'string',
        'lastLogin' => 'string',
        'lastName' => 'string',
        'ldapConfiguration' => 'Spinen\ConnectWise\Models\v2019_2\System\LdapConfigurationReference',
        'ldapUserName' => 'string',
        'licenseClass' => 'string',
        'mapiName' => 'string',
        'middleInitial' => 'string',
        'minimumHours' => 'float',
        'mobileEmail' => 'string',
        'mobileExtension' => 'string',
        'mobilePhone' => 'string',
        'notes' => 'string',
        'officeEmail' => 'string',
        'officeExtension' => 'string',
        'officePhone' => 'string',
        'partnerPortalFlag' => 'boolean',
        'password' => 'string',
        'photo' => 'Spinen\ConnectWise\Models\v2019_2\System\DocumentReference',
        'projectDefaultBoard' => 'Spinen\ConnectWise\Models\v2019_2\System\ProjectBoardReference',
        'projectDefaultDepartment' => 'Spinen\ConnectWise\Models\v2019_2\System\SystemDepartmentReference',
        'projectDefaultLocation' => 'Spinen\ConnectWise\Models\v2019_2\System\SystemLocationReference',
        'remotePackage' => 'string',
        'remotePackageAccount' => 'string',
        'remotePackagePassword' => 'string',
        'remotePackagePlatform' => 'string',
        'remotePackageUserName' => 'string',
        'reportCard' => 'Spinen\ConnectWise\Models\v2019_2\System\ReportCardReference',
        'reportsTo' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberReference',
        'requireExpenseEntryFlag' => 'boolean',
        'requireStartAndEndTimeOnTimeEntryFlag' => 'boolean',
        'requireTimeSheetEntryFlag' => 'boolean',
        'restrictDefaultSalesTerritoryFlag' => 'boolean',
        'restrictDefaultWarehouseBinFlag' => 'boolean',
        'restrictDefaultWarehouseFlag' => 'boolean',
        'restrictDepartmentFlag' => 'boolean',
        'restrictLocationFlag' => 'boolean',
        'restrictProjectDefaultDepartmentFlag' => 'boolean',
        'restrictProjectDefaultLocationFlag' => 'boolean',
        'restrictScheduleFlag' => 'boolean',
        'restrictServiceDefaultDepartmentFlag' => 'boolean',
        'restrictServiceDefaultLocationFlag' => 'boolean',
        'salesDefaultLocation' => 'Spinen\ConnectWise\Models\v2019_2\System\SystemLocationReference',
        'scheduleCapacity' => 'float',
        'scheduleDefaultDepartment' => 'Spinen\ConnectWise\Models\v2019_2\System\SystemDepartmentReference',
        'scheduleDefaultLocation' => 'Spinen\ConnectWise\Models\v2019_2\System\SystemLocationReference',
        'securityLocation' => 'Spinen\ConnectWise\Models\v2019_2\System\SystemLocationReference',
        'securityRole' => 'Spinen\ConnectWise\Models\v2019_2\System\SecurityRoleReference',
        'serviceBoardTeamIds' => 'array',
        'serviceDefaultBoard' => 'Spinen\ConnectWise\Models\v2019_2\System\BoardReference',
        'serviceDefaultDepartment' => 'Spinen\ConnectWise\Models\v2019_2\System\SystemDepartmentReference',
        'serviceDefaultLocation' => 'Spinen\ConnectWise\Models\v2019_2\System\SystemLocationReference',
        'serviceLocation' => 'Spinen\ConnectWise\Models\v2019_2\System\ServiceLocationReference',
        'structureLevel' => 'Spinen\ConnectWise\Models\v2019_2\System\StructureReference',
        'stsUserAdminUrl' => 'string',
        'timeApprover' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberReference',
        'timeReminderEmailFlag' => 'boolean',
        'timeSheetStartDate' => 'Carbon\Carbon',
        'timeZone' => 'Spinen\ConnectWise\Models\v2019_2\System\TimeZoneSetupReference',
        'timebasedOneTimePasswordActivated' => 'boolean',
        'title' => 'string',
        'toastNotificationFlag' => 'boolean',
        'token' => 'string',
        'type' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberTypeReference',
        'vendorNumber' => 'string',
        'warehouse' => 'Spinen\ConnectWise\Models\v2019_2\System\WarehouseReference',
        'warehouseBin' => 'Spinen\ConnectWise\Models\v2019_2\System\WarehouseBinReference',
        'workRole' => 'Spinen\ConnectWise\Models\v2019_2\System\WorkRoleReference',
        'workType' => 'Spinen\ConnectWise\Models\v2019_2\System\WorkTypeReference',
    ];
}
