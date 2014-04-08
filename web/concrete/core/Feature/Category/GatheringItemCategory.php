<?
namespace Concrete\Core\Feature\Category;
class GatheringItemCategory extends Category {

	public function assignmentIsInUse(\Concrete\Core\Feature\Assignment $fa) {
		$db = Loader::db();
		$num = $db->GetOne('select count(gaiID) as total from GatheringItemFeatureAssignments where faID = ?', array($fa->getFeatureAssignmentID()));
		return $num > 0;
	}
		
}