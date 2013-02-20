<?php

class PluginEditdatefix_HookEditdatefix extends Hook {

	public function RegisterHook() {
		$this->AddHook('comment_add_after', 'HookCommentAddAfter');
	}
	
	// �������� ���� ��������� ������ ��� ���������� ������ �����������
	public function HookCommentAddAfter($aParams){
		$oTopic	=	$aParams['oTopic'];	
	
		if ($oTopic){
			$this->PluginEditdatefix_Editdatefix_SetNewEditDateByTopicId($oTopic->getId());			
		}	
	}

	
}

?>