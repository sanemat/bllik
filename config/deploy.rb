require 'capistrano/ext/multistage'
set :application, "bllik"
set :deploy_via, :remote_cache
set :use_sudo, false
set :default_run_options, :pty => true
#server "example.com", :web, :app, :db, :primary => true
#set :deploy_to, "/path/to/#{application}"
#set :php_path, "/path/to/php"

set :scm, :git
set :repository, "git://github.com/sanemat/bllik.git"
#set :branch, 'foobar'
set :git_enable_submodules, 1
set :keep_releases, 3

# If you are using Passenger mod_rails uncomment this:
# if you're still using the script/reapear helper you will need
# these http://github.com/rails/irs_process_scripts

# namespace :deploy do
#   task :start do ; end
#   task :stop do ; end
#   task :restart, :roles => :app, :except => { :no_release => true } do
#     run "#{try_sudo} touch #{File.join(current_path,'tmp','restart.txt')}"
#   end
# end
