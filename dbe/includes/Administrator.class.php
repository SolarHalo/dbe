<?php

/**
 * 管理员数据库操作类,主要实现对管理员的数据库操作
 * Enter description here ...
 * @author hsw
 *
 */
class Administrator{
	
	var $dbutil;
	
	//构造函数
	function __construct($dbutil){
		$this->dbutil = $dbutil;
	}
	/**
	 * 根据用户名获取用户信息
	 * Enter description here ...
	 * @param unknown_type $name
	 */
	function getAdminByName($name){
		return $this->dbutil->get_row("select * from dbe_administrator where admin_name='".$name."'");
	}
	/**
	 * 检查登录
	 * @param unknown_type $name
	 * @param unknown_type $password
	 */
	function checkLogin($name, $password){
		$admin = $this->getAdminByName($name);
		if($admin){
			if($admin->admin_passwd == $password){
				return $admin;
			}else{
				return false;
			}
		}else{
			return false;
		}
		
	}
	
	/**
	 * 增加一个管理员
	 * Enter description here ...
	 * @param unknown_type $data
	 */
	function addAdmin($data){
		 $this->dbutil->insert('dbe_administrator', $data);
	}
	
	/**
	 * 获取所有的管理员.无分页.
	 * Enter description here ...
	 */
	function getAllAdmins(){
		return $this->dbutil->get_results("select * from dbe_administrator");
	}
	
	/**
	 * 获取所有的用户.无分页.
	 * Enter description here ...
	 */
	function getAllUsers(){
		return $this->dbutil->get_results("select * from dbe_user order by user_regdate desc");
	}
	
	/**
	 * 更新管理员密码
	 * Enter description here ...
	 * @param unknown_type $data
	 * @param unknown_type $username
	 */
	function updateAdmin($data, $username){
		return $this->dbutil->update("dbe_administrator", $data, array("admin_name"=>$username));
	}
	
	/**
	 * 删除管理员
	 * Enter description here ...
	 * @param unknown_type $username
	 */
	function deleteAdmin($username){
		return $this->dbutil->query("delete from dbe_administrator where admin_name='" . $username . "'");
	}
	
/**
	 * 删除普通用户
	 * Enter description here ...
	 * @param unknown_type $username
	 */
	function deleteUser($username){
		return $this->dbutil->query("delete from dbe_user where user_name='" . $username . "'");
	}
}

?>
