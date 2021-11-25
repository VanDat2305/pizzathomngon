<?php
require_once 'pdo.php';
function feedback_insert($feedback_name, $feedback_email, $feedback_phone, $feedback_status, $feedback_date)
{
	$sql = "INSERT INTO  tbl_feedback (`feedback_name`,`feedback_email`, `feedback_phone`, `feedback_status`, `sent_date`) VALUES  (?,?,?,?,?)";
	pdo_execute($sql, $feedback_name, $feedback_email, $feedback_phone, $feedback_status, $feedback_date);
}
// 
function feedback_update($feedback_name, $feedback_email, $feedback_phone, $feedback_status, $feedback_date)
{
	$sql = "UPDATE `tbl_feedback` SET `feedback_name`=?,'feedback_email'=?, `feedback_phone`=?,`feedback_status`=?,`sent_date`=? WHERE 'feedback_id' = ?";
	pdo_execute($sql,$feedback_name, $feedback_email, $feedback_phone, $feedback_status, $feedback_date);
}
// 
function feedback_delete($feedback_id)
{
	$sql = "DELETE FROM tbl_feedback WHERE feedback_id=?";
	if (is_array($feedback_id)) {
		foreach ($feedback_id as $ma) {
			pdo_execute($sql, $ma);
		}
	} else {
		pdo_execute($sql, $feedback_id);
	}
}
// 
function feedback_select_all()
{
	$sql = "SELECT * FROM tbl_feedback bl ORDER BY sent_date DESC";
	return pdo_query($sql);
}
// 
function feedback_select_by_id($feedback_id)
{
	$sql = "SELECT * FROM tbl_feedback WHERE feedback_id=?";
	return pdo_query_one($sql, $feedback_id);
}
// 
function feedback_exist($feedback_id)
{
	$sql = "SELECT count(*) FROM tbl_feedback WHERE feedback_id=?";
	return pdo_query_value($sql, $feedback_id) > 0;
}
// 


