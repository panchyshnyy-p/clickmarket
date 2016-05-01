# note: this should never truly be refernced since we are using relative assets
http_path = "/skin/frontend/smart/theme/"
css_dir = "../../../css/fonts-awesome"
sass_dir = "../scss"
relative_assets = true

environment = :development
output_style = (environment == :production) ? :compressed : :expanded
