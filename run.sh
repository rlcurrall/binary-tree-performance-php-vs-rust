#!/bin/bash

(cd php && composer install --quiet)
printf "
================================================================================
 PHP run
================================================================================
"
php ./php/main.php


printf "
================================================================================
 Rust run
================================================================================
"
(cd rust && cargo build --quiet --release)
cp ./rust/target/release/binary_tree rust
(cd rust && ./binary_tree)
rm ./rust/binary_tree
