<?
namespace Concrete\Core\Page\Theme\GridFramework;
use Loader;
abstract class PageThemeGridFramework {

	public static function getByHandle($pThemeGridFrameworkHandle) {
		$class = Loader::helper('text')->camelcase($pThemeGridFrameworkHandle) . 'PageThemeGridFramework';
		$cl = new $class();
		return $cl;
	}

	abstract public function getPageThemeGridFrameworkName();
	abstract public function getPageThemeGridFrameworkRowStartHTML();
	abstract public function getPageThemeGridFrameworkRowEndHTML();
	public function getPageThemeGridFrameworkNumColumns() {
		$classes = $this->getPageThemeGridFrameworkColumnClasses();
		return count($classes);
	}
	
	public function hasPageThemeGridFrameworkOffsetClasses() {
		$classes = $this->getPageThemeGridFrameworkColumnClasses();
		return count($classes) > 0;
	}

	abstract public function getPageThemeGridFrameworkColumnClasses();
	abstract public function getPageThemeGridFrameworkColumnOffsetClasses();

	public function getPageThemeGridFrameworkColumnClassForSpan($span) {
		$span = $span - 1;
		$classes = $this->getPageThemeGridFrameworkColumnClasses();
		return $classes[$span];
	}

	public function getPageThemeGridFrameworkColumnClassForOffset($offset) {
		$offset = $offset - 1;
		$classes = $this->getPageThemeGridFrameworkColumnOffsetClasses();
		return $classes[$offset];
	}

}