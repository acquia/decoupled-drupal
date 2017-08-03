<?php
namespace Acquia\Blt\Custom\Hooks;
use Acquia\Blt\Robo\BltTasks;
/**
 * Defines content import hooks.
 */
class ContentImportHook extends BltTasks {
  /**
   * This will be called after the setup:config-import command.
   *
   * @hook post-command setup:config-import
   * @executeInDrupalVm
   */
  public function postConfigImport() {
    $this->importContent();
  }
  /**
   * Import all available content.
   */
  protected function importContent() {
    $this->migrateContent();
  }
  /**
   * Migrate all content setup via migrate module.
   */
  protected function migrateContent() {
    $task = $this->taskDrush()
      ->drush("cc drush")
      ->drush("mi --all")
      ->drush("cr");
    $task->run();
  }
}
