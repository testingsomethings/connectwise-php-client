<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivation Version v2019_2
 *
 * Model for MemberDeactivation
 *
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationDepartmentMananager $departmentManager
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationDispatchMember $dispatchMember
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationDutyManager $dutyManager
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationKnowledgebaseArticle $knowledgeBaseArticle
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationMyCompanyCOORole $myCompanyCOO
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationMyCompanyControllerRole $myCompanyController
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationMyCompanyDispatchRole $myCompanyDispatch
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationMyCompanyDutyManagerRole $myCompanyDutyManagerRole
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationMyCompanyPresidentRole $myCompanyPresident
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationMyCompanyServiceManagerRole $myCompanyServiceManager
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationOpportunity $opportunity
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationProjectManager $projectExpenseApprover
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationProjectManager $projectManager
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationProjectManager $projectTimeApprover
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationSalesActivity $activity
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationSalesTeam $salesTeam
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationServiceManger $serviceManager
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationServiceTeam $serviceTeam
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationServiceTemplate $ticketTemplate
 * @property Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationWorkflow $workflowEmail
 * @property array $companyTeam
 * @property array $serviceStatusWorkflow
 * @property boolean $deleteOpenTimeSheetsFlag
 */
class MemberDeactivation extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'activity' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationSalesActivity',
        'companyTeam' => 'array',
        'deleteOpenTimeSheetsFlag' => 'boolean',
        'departmentManager' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationDepartmentMananager',
        'dispatchMember' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationDispatchMember',
        'dutyManager' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationDutyManager',
        'knowledgeBaseArticle' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationKnowledgebaseArticle',
        'myCompanyCOO' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationMyCompanyCOORole',
        'myCompanyController' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationMyCompanyControllerRole',
        'myCompanyDispatch' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationMyCompanyDispatchRole',
        'myCompanyDutyManagerRole' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationMyCompanyDutyManagerRole',
        'myCompanyPresident' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationMyCompanyPresidentRole',
        'myCompanyServiceManager' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationMyCompanyServiceManagerRole',
        'opportunity' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationOpportunity',
        'projectExpenseApprover' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationProjectManager',
        'projectManager' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationProjectManager',
        'projectTimeApprover' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationProjectManager',
        'salesTeam' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationSalesTeam',
        'serviceManager' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationServiceManger',
        'serviceStatusWorkflow' => 'array',
        'serviceTeam' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationServiceTeam',
        'ticketTemplate' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationServiceTemplate',
        'workflowEmail' => 'Spinen\ConnectWise\Models\v2019_2\System\MemberDeactivationWorkflow',
    ];
}
