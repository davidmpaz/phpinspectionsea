package com.kalessil.phpStorm.phpInspectionsEA.api;

import com.kalessil.phpStorm.phpInspectionsEA.PhpCodeInsightFixtureTestCase;
import com.kalessil.phpStorm.phpInspectionsEA.inspectors.apiUsage.fileSystem.DirnameCallOnFileConstantInspector;

final public class DirnameCallOnFileConstantInspectorTest extends PhpCodeInsightFixtureTestCase {
    public void testIfFindsAllPatterns() {
        myFixture.configureByFile("fixtures/api/dirname-on-file-const.php");
        myFixture.enableInspections(DirnameCallOnFileConstantInspector.class);
        myFixture.testHighlighting(true, false, true);
    }
}