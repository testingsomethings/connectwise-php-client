<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Agreement Version v2018_6
 *
 * Model for Agreement
 *
 * @property Carbon\Carbon $billStartDate
 * @property Carbon\Carbon $dateCancelled
 * @property Carbon\Carbon $endDate
 * @property Carbon\Carbon $startDate
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\AgreementTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference $billToCompany
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference $subContractCompany
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\ContactReference $subContractContact
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\OpportunityReference $opportunity
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\SiteReference $billToSite
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\WorkRoleReference $workRole
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\WorkTypeReference $workType
 * @property array $customFields
 * @property boolean $allowOverruns
 * @property boolean $applicationUnlimitedFlag
 * @property boolean $billOneTimeFlag
 * @property boolean $billableExpenseInvoice
 * @property boolean $billableProductInvoice
 * @property boolean $billableTimeInvoice
 * @property boolean $bottomComment
 * @property boolean $cancelledFlag
 * @property boolean $carryOverUnused
 * @property boolean $chargeToFirm
 * @property boolean $coverAgreementExpense
 * @property boolean $coverAgreementProduct
 * @property boolean $coverAgreementTime
 * @property boolean $coverSalesTax
 * @property boolean $expireWhenZero
 * @property boolean $noEndingDateFlag
 * @property boolean $oneTimeFlag
 * @property boolean $prorateFlag
 * @property boolean $restrictDepartmentFlag
 * @property boolean $restrictDownPayment
 * @property boolean $restrictLocationFlag
 * @property boolean $taxable
 * @property boolean $topComment
 * @property float $applicationLimit
 * @property float $billAmount
 * @property float $compHourlyRate
 * @property float $compLimitAmount
 * @property float $prorateFirstBill
 * @property integer $billCycleId
 * @property integer $billTermsId
 * @property integer $businessUnitId
 * @property integer $expiredDays
 * @property integer $id
 * @property integer $invoiceTemplateSetupId
 * @property integer $limit
 * @property integer $locationId
 * @property integer $parentAgreementId
 * @property integer $projectTypeId
 * @property integer $slaId
 * @property integer $taxCodeId
 * @property string $applicationCycle
 * @property string $applicationUnits
 * @property string $billExpenses
 * @property string $billProducts
 * @property string $billTime
 * @property string $customerPO
 * @property string $employeeCompNotExceed
 * @property string $employeeCompRate
 * @property string $internalNotes
 * @property string $invoiceDescription
 * @property string $invoicingCycle
 * @property string $name
 * @property string $periodType
 * @property string $reasonCancelled
 * @property string $workOrder
 */
class Agreement extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Finance\Metadata',
        'allowOverruns' => 'boolean',
        'applicationCycle' => 'string',
        'applicationLimit' => 'float',
        'applicationUnits' => 'string',
        'applicationUnlimitedFlag' => 'boolean',
        'billAmount' => 'float',
        'billCycleId' => 'integer',
        'billExpenses' => 'string',
        'billOneTimeFlag' => 'boolean',
        'billProducts' => 'string',
        'billStartDate' => 'Carbon\Carbon',
        'billTermsId' => 'integer',
        'billTime' => 'string',
        'billToCompany' => 'Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference',
        'billToSite' => 'Spinen\ConnectWise\Models\v2018_6\Finance\SiteReference',
        'billableExpenseInvoice' => 'boolean',
        'billableProductInvoice' => 'boolean',
        'billableTimeInvoice' => 'boolean',
        'bottomComment' => 'boolean',
        'businessUnitId' => 'integer',
        'cancelledFlag' => 'boolean',
        'carryOverUnused' => 'boolean',
        'chargeToFirm' => 'boolean',
        'compHourlyRate' => 'float',
        'compLimitAmount' => 'float',
        'company' => 'Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference',
        'contact' => 'Spinen\ConnectWise\Models\v2018_6\Finance\ContactReference',
        'coverAgreementExpense' => 'boolean',
        'coverAgreementProduct' => 'boolean',
        'coverAgreementTime' => 'boolean',
        'coverSalesTax' => 'boolean',
        'currency' => 'Spinen\ConnectWise\Models\v2018_6\Finance\CurrencyReference',
        'customFields' => 'array',
        'customerPO' => 'string',
        'dateCancelled' => 'Carbon\Carbon',
        'employeeCompNotExceed' => 'string',
        'employeeCompRate' => 'string',
        'endDate' => 'Carbon\Carbon',
        'expireWhenZero' => 'boolean',
        'expiredDays' => 'integer',
        'id' => 'integer',
        'internalNotes' => 'string',
        'invoiceDescription' => 'string',
        'invoiceTemplateSetupId' => 'integer',
        'invoicingCycle' => 'string',
        'limit' => 'integer',
        'locationId' => 'integer',
        'name' => 'string',
        'noEndingDateFlag' => 'boolean',
        'oneTimeFlag' => 'boolean',
        'opportunity' => 'Spinen\ConnectWise\Models\v2018_6\Finance\OpportunityReference',
        'parentAgreementId' => 'integer',
        'periodType' => 'string',
        'projectTypeId' => 'integer',
        'prorateFirstBill' => 'float',
        'prorateFlag' => 'boolean',
        'reasonCancelled' => 'string',
        'restrictDepartmentFlag' => 'boolean',
        'restrictDownPayment' => 'boolean',
        'restrictLocationFlag' => 'boolean',
        'slaId' => 'integer',
        'startDate' => 'Carbon\Carbon',
        'subContractCompany' => 'Spinen\ConnectWise\Models\v2018_6\Finance\CompanyReference',
        'subContractContact' => 'Spinen\ConnectWise\Models\v2018_6\Finance\ContactReference',
        'taxCodeId' => 'integer',
        'taxable' => 'boolean',
        'topComment' => 'boolean',
        'type' => 'Spinen\ConnectWise\Models\v2018_6\Finance\AgreementTypeReference',
        'workOrder' => 'string',
        'workRole' => 'Spinen\ConnectWise\Models\v2018_6\Finance\WorkRoleReference',
        'workType' => 'Spinen\ConnectWise\Models\v2018_6\Finance\WorkTypeReference',
    ];
}
