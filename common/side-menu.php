<?php echo '
<div class="aside-menu">
    <form action="' . $domain . 'search-products" method="get">
        <label for="product-search">Product Search</label>
        <input type="text" name="query" id="product-search">
        <input type="submit" value="Go" name="" id="">
    </form>
    <div class="side-menu">
        <h2>Products</h2>
        <ul>
            <li><a href="' . $domain . 'product-category/dc-power-supplies">DC Power Supplies</a></li>
            <li><a href="' . $domain . 'product-category/electronic-loads">Electronic Loads</a></li>
            <li><a href="' . $domain . 'product-category/source-measure-units">Source Measure Units</a></li>
            <li><a href="' . $domain . 'product-category/function-generators">Function Generators</a></li>
            <li><a href="' . $domain . 'product-category/pulse-generators">Pulse Generators</a></li>
            <li><a href="' . $domain . 'product-category/arbitrary-generators">Arbitrary Generators</a></li>
            <li><a href="' . $domain . 'product-category/waveform-amplifiers">Waveform Amplifiers</a></li>
            <li><a href="' . $domain . 'product-category/multimeters">Multimeters</a></li>
            <li><a href="' . $domain . 'product-category/frequency-counters">Frequency Counters</a></li>
            <li><a href="' . $domain . 'product-category/lcr-measurement">LCR Measurement</a></li>
            <li><a href="' . $domain . 'product-category/current-probes">Current Probes</a></li>
            <li><a href="' . $domain . 'product-category/spectrum-analyzers">Spectrum Analyzers</a></li>
            <li><a href="' . $domain . 'product-category/rf-signal-generators">RF Signal Generators</a></li>
            <li><a href="' . $domain . 'product-category/emc-analyzers">EMC Analyzers</a></li>
            <li><a href="' . $domain . 'product-category/software">Software</a></li>
            <li><a href="' . $domain . 'product-category/product-accessories">Product Accessories</a></li>
            <li><a href="' . $domain . 'product-category/product-options">Product Options</a></li>
            <li><a href="' . $domain . 'product-category/legacy-products">Legacy Products</a></li>
        </ul>
    </div>
</div>
';
