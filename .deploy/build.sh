set -e

# Build styles and scripts
npm run build
# ==========================

# Copy plugin files
[[ ! -d trunk ]] && mkdir trunk

cp assets trunk/

cp src trunk/

cp vendor trunk/

cp wpfleet.php trunk/
# ==========================

# Package plugin files
[[ ! -d bundle ]] && mkdir bundle

pushd trunk

tar -zcvf ../bundle/wpfleet.tar.gz ./*

zip -r ../bundle/wpfleet.zip ./*

popd
# ==========================
