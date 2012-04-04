require 'sinatra'
require 'mongo'

get '/' do
  erb :index3
end

post '/mono' do
  @email = params[:email]
  erb :mono
end