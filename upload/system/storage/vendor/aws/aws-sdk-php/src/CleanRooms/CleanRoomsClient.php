<?php
namespace Aws\CleanRooms;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Clean Rooms Service** service.
 * @method \Aws\Result batchGetCollaborationAnalysisTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetCollaborationAnalysisTemplateAsync(array $args = [])
 * @method \Aws\Result batchGetSchema(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetSchemaAsync(array $args = [])
 * @method \Aws\Result batchGetSchemaAnalysisRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetSchemaAnalysisRuleAsync(array $args = [])
 * @method \Aws\Result createAnalysisTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAnalysisTemplateAsync(array $args = [])
 * @method \Aws\Result createCollaboration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCollaborationAsync(array $args = [])
 * @method \Aws\Result createConfiguredAudienceModelAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConfiguredAudienceModelAssociationAsync(array $args = [])
 * @method \Aws\Result createConfiguredTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConfiguredTableAsync(array $args = [])
 * @method \Aws\Result createConfiguredTableAnalysisRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConfiguredTableAnalysisRuleAsync(array $args = [])
 * @method \Aws\Result createConfiguredTableAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConfiguredTableAssociationAsync(array $args = [])
 * @method \Aws\Result createIdMappingTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createIdMappingTableAsync(array $args = [])
 * @method \Aws\Result createIdNamespaceAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createIdNamespaceAssociationAsync(array $args = [])
 * @method \Aws\Result createMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMembershipAsync(array $args = [])
 * @method \Aws\Result createPrivacyBudgetTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPrivacyBudgetTemplateAsync(array $args = [])
 * @method \Aws\Result deleteAnalysisTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAnalysisTemplateAsync(array $args = [])
 * @method \Aws\Result deleteCollaboration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCollaborationAsync(array $args = [])
 * @method \Aws\Result deleteConfiguredAudienceModelAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConfiguredAudienceModelAssociationAsync(array $args = [])
 * @method \Aws\Result deleteConfiguredTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConfiguredTableAsync(array $args = [])
 * @method \Aws\Result deleteConfiguredTableAnalysisRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConfiguredTableAnalysisRuleAsync(array $args = [])
 * @method \Aws\Result deleteConfiguredTableAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConfiguredTableAssociationAsync(array $args = [])
 * @method \Aws\Result deleteIdMappingTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIdMappingTableAsync(array $args = [])
 * @method \Aws\Result deleteIdNamespaceAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIdNamespaceAssociationAsync(array $args = [])
 * @method \Aws\Result deleteMember(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMemberAsync(array $args = [])
 * @method \Aws\Result deleteMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMembershipAsync(array $args = [])
 * @method \Aws\Result deletePrivacyBudgetTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePrivacyBudgetTemplateAsync(array $args = [])
 * @method \Aws\Result getAnalysisTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAnalysisTemplateAsync(array $args = [])
 * @method \Aws\Result getCollaboration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCollaborationAsync(array $args = [])
 * @method \Aws\Result getCollaborationAnalysisTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCollaborationAnalysisTemplateAsync(array $args = [])
 * @method \Aws\Result getCollaborationConfiguredAudienceModelAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCollaborationConfiguredAudienceModelAssociationAsync(array $args = [])
 * @method \Aws\Result getCollaborationIdNamespaceAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCollaborationIdNamespaceAssociationAsync(array $args = [])
 * @method \Aws\Result getCollaborationPrivacyBudgetTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCollaborationPrivacyBudgetTemplateAsync(array $args = [])
 * @method \Aws\Result getConfiguredAudienceModelAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConfiguredAudienceModelAssociationAsync(array $args = [])
 * @method \Aws\Result getConfiguredTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConfiguredTableAsync(array $args = [])
 * @method \Aws\Result getConfiguredTableAnalysisRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConfiguredTableAnalysisRuleAsync(array $args = [])
 * @method \Aws\Result getConfiguredTableAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConfiguredTableAssociationAsync(array $args = [])
 * @method \Aws\Result getIdMappingTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIdMappingTableAsync(array $args = [])
 * @method \Aws\Result getIdNamespaceAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIdNamespaceAssociationAsync(array $args = [])
 * @method \Aws\Result getMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMembershipAsync(array $args = [])
 * @method \Aws\Result getPrivacyBudgetTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPrivacyBudgetTemplateAsync(array $args = [])
 * @method \Aws\Result getProtectedQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getProtectedQueryAsync(array $args = [])
 * @method \Aws\Result getSchema(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSchemaAsync(array $args = [])
 * @method \Aws\Result getSchemaAnalysisRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSchemaAnalysisRuleAsync(array $args = [])
 * @method \Aws\Result listAnalysisTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAnalysisTemplatesAsync(array $args = [])
 * @method \Aws\Result listCollaborationAnalysisTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCollaborationAnalysisTemplatesAsync(array $args = [])
 * @method \Aws\Result listCollaborationConfiguredAudienceModelAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCollaborationConfiguredAudienceModelAssociationsAsync(array $args = [])
 * @method \Aws\Result listCollaborationIdNamespaceAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCollaborationIdNamespaceAssociationsAsync(array $args = [])
 * @method \Aws\Result listCollaborationPrivacyBudgetTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCollaborationPrivacyBudgetTemplatesAsync(array $args = [])
 * @method \Aws\Result listCollaborationPrivacyBudgets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCollaborationPrivacyBudgetsAsync(array $args = [])
 * @method \Aws\Result listCollaborations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCollaborationsAsync(array $args = [])
 * @method \Aws\Result listConfiguredAudienceModelAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listConfiguredAudienceModelAssociationsAsync(array $args = [])
 * @method \Aws\Result listConfiguredTableAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listConfiguredTableAssociationsAsync(array $args = [])
 * @method \Aws\Result listConfiguredTables(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listConfiguredTablesAsync(array $args = [])
 * @method \Aws\Result listIdMappingTables(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIdMappingTablesAsync(array $args = [])
 * @method \Aws\Result listIdNamespaceAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIdNamespaceAssociationsAsync(array $args = [])
 * @method \Aws\Result listMembers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMembersAsync(array $args = [])
 * @method \Aws\Result listMemberships(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listMembershipsAsync(array $args = [])
 * @method \Aws\Result listPrivacyBudgetTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPrivacyBudgetTemplatesAsync(array $args = [])
 * @method \Aws\Result listPrivacyBudgets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPrivacyBudgetsAsync(array $args = [])
 * @method \Aws\Result listProtectedQueries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProtectedQueriesAsync(array $args = [])
 * @method \Aws\Result listSchemas(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSchemasAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result populateIdMappingTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise populateIdMappingTableAsync(array $args = [])
 * @method \Aws\Result previewPrivacyImpact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise previewPrivacyImpactAsync(array $args = [])
 * @method \Aws\Result startProtectedQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startProtectedQueryAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateAnalysisTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAnalysisTemplateAsync(array $args = [])
 * @method \Aws\Result updateCollaboration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCollaborationAsync(array $args = [])
 * @method \Aws\Result updateConfiguredAudienceModelAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConfiguredAudienceModelAssociationAsync(array $args = [])
 * @method \Aws\Result updateConfiguredTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConfiguredTableAsync(array $args = [])
 * @method \Aws\Result updateConfiguredTableAnalysisRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConfiguredTableAnalysisRuleAsync(array $args = [])
 * @method \Aws\Result updateConfiguredTableAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConfiguredTableAssociationAsync(array $args = [])
 * @method \Aws\Result updateIdMappingTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateIdMappingTableAsync(array $args = [])
 * @method \Aws\Result updateIdNamespaceAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateIdNamespaceAssociationAsync(array $args = [])
 * @method \Aws\Result updateMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMembershipAsync(array $args = [])
 * @method \Aws\Result updatePrivacyBudgetTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePrivacyBudgetTemplateAsync(array $args = [])
 * @method \Aws\Result updateProtectedQuery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProtectedQueryAsync(array $args = [])
 */
class CleanRoomsClient extends AwsClient {}
