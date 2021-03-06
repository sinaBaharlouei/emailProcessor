<?php
namespace UserBundle\Entity\Constants;

/**
 * UserBundle\Entity\Constants\UserConstants
 */
class UserConstants
{
	const STATUS_NOT_VERIFIED = "NOT_VERIFIED";
	const STATUS_ACTIVE = "ACTIVE";
	const STATUS_DEACTIVATED = "DEACTIVATED";
	const STATUS_DELETED = "DELETED";
	const STATUS_LOCKED = "LOCKED";

	public static $user_statuses = array(
		UserConstants::STATUS_NOT_VERIFIED => "Not Verified",
		UserConstants::STATUS_ACTIVE => "Active",
		UserConstants::STATUS_DEACTIVATED => "Deactivated",
		UserConstants::STATUS_DELETED => "Deleted",
		UserConstants::STATUS_LOCKED => "Locked",
	);

	public static $caps = array(
		1 => "decons",
		2 => "faupersc",
		3 => "rateoth",
		4 => "wardst",
		5 => "caudzoa",
		6 => "tratint",
	);
}
