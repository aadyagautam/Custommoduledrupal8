<?php
namespace Drupal\simple_form\Forms;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
* Implements a simple form.
*/
Class SimpleForm extends FormBase {
	
  public function getFormId() {
    return 'simple_form';
  }
  
	/*public function buildform(array $form, FormStateInterface $form_state) {
	   $form['title'] = [
      	'#type' => 'textfield',
      	'#title' => $this->t('Title'),
      	'#description' => $this->t('Title must be at least 15 characters in length.'),
      	'#required' => TRUE,
    	];

      $form['actions'] = [
      	'#type' => 'actions',
    	];

    // Add a submit button that handles the submission of the form.
    	$form['actions']['submit'] = [
      	'#type' => 'submit',
      	'#value' => $this->t('Submit'),
    	];

    return $form;
	}
}


  
public function validateForm(array &amp;$form, FormStateInterface $form_state) {
    $title = $form_state->getValue('title');
    if (strlen($title) < 15) {
      // Set an error for the form element with a key of "title".
      $form_state->setErrorByName('title', $this->t('The title must be at least 15 characters long.'));
    }
}

  
public function submitForm(array &amp;$form, FormStateInterface $form_state) {
    
    $title = $form_state->getValue('title');
    drupal_set_message($this->t('You specified a title of %title.', ['%title' => $title]));
  }*/

}