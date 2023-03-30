<?php
    $breadcrumbs = array
    (
        'Download' => 'download.php',
        'SFML 2.6.0' => 'download/sfml/2.6.0'
    );
    include('../../../header.php');

    function download_link($compiler, $arch, $size, $link)
    {
        $counter_script = "_gaq.push(['_trackEvent', 'Download', 'SFML 2.6.0']);";
        echo '<span class="description">' . $compiler . ' - ' . $arch . '</span><a href="' . $link . '" onclick="' . $counter_script . '">Download<span class="size">' . $size . ' MB</span></a>';
    }
?>

<h1>Download SFML 2.6.0</h1>

<table class="styled download">
    <tbody>
        <tr>
            <td class="notice" colspan="3">
                On Windows, choosing 32 or 64-bit libraries should be based on which platform you want to compile for, not which OS you have. Indeed, you can perfectly
                compile and run a 32-bit program on a 64-bit Windows. So you'll most likely want to target 32-bit platforms, to have the largest possible audience.
                Choose 64-bit packages only if you have good reasons.
                <div class="important">
                    <strong>Unless you are using a newer version of Visual Studio, the compiler versions have to match 100%!</strong><br>
                    Here are links to the specific MinGW compiler versions used to build the provided packages:<br>
                    <a href="https://github.com/brechtsanders/winlibs_mingw/releases/download/12.2.0-15.0.7-10.0.0-msvcrt-r4/winlibs-i686-posix-dwarf-gcc-12.2.0-llvm-15.0.7-mingw-w64msvcrt-10.0.0-r4.7z">WinLibs MSVCRT 12.2.0 (32-bit)</a>,
                    <a href="https://github.com/brechtsanders/winlibs_mingw/releases/download/12.2.0-15.0.7-10.0.0-msvcrt-r4/winlibs-x86_64-posix-seh-gcc-12.2.0-llvm-15.0.7-mingw-w64msvcrt-10.0.0-r4.7z">WinLibs MSVCRT 12.2.0 (64-bit)</a>
                </div>
            </td>
        </tr>
        <tr>
            <td><?php download_link('Visual C++ 17 (2022)', '32-bit', '', '../../../files/SFML-2.6.0-windows-vc17-32-bit.zip') ?></td>
            <td><?php download_link('Visual C++ 17 (2022)', '64-bit', '', '../../../files/SFML-2.6.0-windows-vc17-64-bit.zip') ?></td>
        </tr>
        <tr>
            <td><?php download_link('Visual C++ 16 (2019)', '32-bit', '', '../../../files/SFML-2.6.0-windows-vc16-32-bit.zip') ?></td>
            <td><?php download_link('Visual C++ 16 (2019)', '64-bit', '', '../../../files/SFML-2.6.0-windows-vc16-64-bit.zip') ?></td>
        </tr>
        <tr>
            <td><?php download_link('Visual C++ 15 (2017)', '32-bit', '', '../../../files/SFML-2.6.0-windows-vc15-32-bit.zip') ?></td>
            <td><?php download_link('Visual C++ 15 (2017)', '64-bit', '', '../../../files/SFML-2.6.0-windows-vc15-64-bit.zip') ?></td>
        </tr>
        <tr>
            <td><?php download_link('GCC 12.2.0 MinGW (DW2)', '32-bit', '', '../../../files/SFML-2.6.0-windows-gcc-12.2.0-mingw-32-bit.zip') ?></td>
            <td><?php download_link('GCC 12.2.0 MinGW (SEH)', '64-bit', '', '../../../files/SFML-2.6.0-windows-gcc-12.2.0-mingw-64-bit.zip') ?></td>
        </tr>
    </tbody>
</table>

<table class="styled download">
    <tbody>
        <tr>
            <td class="notice" colspan="3">
                On Linux, if you have a 64-bit OS then you have the 64-bit toolchain installed by default. Compiling for 32-bit is possible, but you have to install
                specific packages and/or use specific compiler options to do so. So downloading the 64-bit libraries is the easiest solution if you're on a 64-bit Linux.<br />
                If you require a 32-bit build of SFML you'll have to <a href="/tutorials/2.6/compile-with-cmake.php">build it yourself</a>.
                <div class="important">
                    It's recommended to use the SFML version from your package manager (if recent enough) or build from source to prevent incompatibilities.
                </div>
            </td>
        </tr>
        <tr>
            <td class="os" rowspan="2">Linux</td>
            <td><?php download_link('GCC', '64-bit', '2', '../../../files/SFML-2.6.0-linux-gcc-64-bit.tar.gz') ?></td>
        </tr>
    </tbody>
</table>

<table class="styled download">
    <tbody>
        <tr>
            <td class="os" rowspan="2">macOS</td>
            <td><?php download_link('Clang', '64-bit (OS X 10.7+, compatible with C++11 and libc++)', '', '../../../files/SFML-2.6.0-macOS-clang.tar.gz') ?></td>
        </tr>
        <tr>
            <td class="notice" colspan="3">
                macOS libraries are only compatible with 64-bit systems.
            </td>
        </tr>
    </tbody>
</table>

<table class="styled download">
    <tbody>
        <tr>
            <td class="os" rowspan="2">All</td>
            <td><span class="description">Source code</span><a href="../../../files/SFML-2.6.0-sources.zip">Download<span class="size"> MB</span></a></td>
        </tr>
        <tr>
            <td><span class="description">HTML Documentation</span><a href="../../../files/SFML-2.6.0-doc.zip">Download<span class="size"> MB</span></a></td>
        </tr>
    </tbody>
</table>

<?php
    require("../../../footer.php");
?>
