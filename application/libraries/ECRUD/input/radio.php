<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(!empty($field))
{
	if($this->init == 'edit' || $this->init == 'param')
	{
		$data_value = empty($this->id) ? 1 : $data[$field];
		$values     = !empty($data[$field]) ? $data[$field] : '1';
		echo '<br>';
		echo form_label(ucfirst($label), $label);
		$name = $field;
	}else{
		$data_value = $dvalue[$ikey];
		$values = $dvalue['id'];
		$name = $field.'_row[]';
	}
	if(!empty($this->radio[$field]))
	{
		$data_check = array();
		$data_check = explode(',',$data_value);
		$data_check = array_filter($data_check);

		foreach ($this->radio[$field] as $cfkey => $cfvalue)
		{
			$checked = in_array($cfkey, $data_check) ? 1 : 0;
			echo '<div class="radio">';
			echo '<label>';
			echo form_radio(array(
				'name'    => $name.'[]',
				'value'   => $cfkey,
				'checked' => $checked,
				'class' => $name
				)).ucfirst($cfvalue);
			echo '</label>';
			echo '</div>';
		}
	}else{
		echo '<div class="radio">';
		echo '<label>';
		echo form_radio(array(
			'name'    => $name,
			'value'   => $values,
			'class'   => $field,
			$required => $required,
			'checked' => $data_value
			)).ucfirst($field);
		echo '</label>';
		echo '</div>';
	}

}